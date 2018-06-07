<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Transformers\Users\UserTransformer;
use Illuminate\Support\Facades\Auth;

/**
 * Class ProfileController
 * @package App\Http\Controllers\Api\Users
 */
class ProfileController extends Controller
{
    /**
     * @return \Dingo\Api\Http\Response
     */
    public function index()
    {
        return $this->response->item(Auth::guard('api')->user(), new UserTransformer());
    }

    /**
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::guard('api')->user();
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ];
        if ($request->method() == 'PATCH') {
            $rules = [
                'name' => 'sometimes|required',
                'email' => 'sometimes|required|email|unique:users,email,'.$user->id,
            ];
        }
        $this->validate($request, $rules);
        // Except password as we don't want to let the users change a password from this endpoint
        $user->update($request->except('_token', 'password'));

        return $this->response->item($user->fresh(), new UserTransformer());
    }

    /**
     * @param Request $request
     * @return \Dingo\Api\Http\Response
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::guard('api')->user();
        $this->validate($request, [
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);
        // verify the old password given is valid
        if (! app(Hasher::class)->check($request->get('current_password'), $user->password)) {
            throw new ResourceException('Validation Issue', [
                'old_password' => 'The current password is incorrect',
            ]);
        }
        $user->password = bcrypt($request->get('password'));
        $user->save();

        return $this->response->item($user->fresh(), new UserTransformer());
    }
}
