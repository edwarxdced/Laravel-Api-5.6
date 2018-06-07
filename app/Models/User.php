<?php

namespace App;

use App\Notifications\ResetPasswordNotification;
use App\Support\HasRolesUuid;
use App\Support\UuidScopeTrait;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package App
 */
class User extends Authenticatable
{
    use Notifiable, UuidScopeTrait, HasApiTokens, HasRoles, SoftDeletes, HasRolesUuid {
        HasRolesUuid::getStoredRole insteadof HasRoles;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function create(array $attributes = []) {
        if (array_key_exists('password', $attributes)) {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        $model = static::query()->create($attributes);

        return $model;
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
