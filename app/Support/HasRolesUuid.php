<?php

namespace App\Support;

use App\Role as RoleModel;
use Spatie\Permission\Contracts\Role;

/**
 * Trait HasRolesUuid
 * @package App\Support
 */
trait HasRolesUuid
{
    /**
     * @param $role
     *
     * @return Role
     */
    protected function getStoredRole($role): Role
    {
        if (is_string($role)) {
            return app(RoleModel::class)->where('name', $role)->orWhere('uuid', $role)->first();
        }

        return $role;
    }
}
