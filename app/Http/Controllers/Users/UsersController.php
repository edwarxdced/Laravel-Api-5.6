<?php

namespace App\Http\Controllers\Users;


use App\Http\Controllers\Controller;
use App\Transformers\Users\UserTransformer;
use App\User;
use Validator;
use Illuminate\Http\Request;

/**
 * The users API will allow you to work with the users, roles and permissions.
 * It requires your user to have permissions to fetch, create, update or delete users in the system depending on the request you want to make
 *
 * @Resource("Group Users API", uri="/users")
 */
class UsersController extends Controller
{
    /**
     * UsersController constructor.
     *
     * @param User $model
     */
    public function __construct(User $model) {
        $this->model = $model;

        $this->middleware('permission:List users')->only('index');
        $this->middleware('permission:List users')->only('show');
        //$this->middleware('permission:Create users')->only('store');
        $this->middleware('permission:Update users')->only('update');
        $this->middleware('permission:Delete users')->only('destroy');
    }

   
    function index(Request $request)
    {
        $paginator = $this->model->paginate($request->get('limit', config('app.pagination_limit')));
        if ($request->has('limit')) {
            $paginator->appends('limit', $request->get('limit'));
        }

        return $this->response->paginator($paginator, new UserTransformer());
    }

   
    public function show($uuid) {
        $user = $this->model->byUuid($uuid)->firstOrFail();

        return $this->response->item($user, new UserTransformer());
    }

   
    public function store(Request $request) {
        $attributes = $request->all();

        $validator = Validator::make($attributes, [
            'name'     => 'required',
            'password' => 'required|min:8',
            'email'    => 'required|email|unique:users'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user = $this->model->create($attributes);
        return $this->response->item($user, new UserTransformer())->setStatusCode(201);
    }

   
    public function update(Request $request, $uuid) {
        $attributes = $request->except('_token');

        $user = $this->model->byUuid($uuid)->firstOrFail();

        $validator = Validator::make($attributes, [
            'name' => 'required',
            'email' => 'email|unique:users,email,'.$user->id
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        };

        $user->update($attributes);

        return $this->response->item($user, new UserTransformer())->setStatusCode(200);
    }

    
    public function destroy(Request $request, $uuid) {
        $user = $this->model->byUuid($uuid)->firstOrFail();
        $user->delete();
        return $this->response->noContent();
    }
}