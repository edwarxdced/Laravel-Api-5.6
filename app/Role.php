<?php

namespace App;

use App\Support\UuidScopeTrait;
use App\Support\HasPermissionsUuid;

/**
 * Class Role
 * @package App
 */
class Role extends \Spatie\Permission\Models\Role {
    use UuidScopeTrait, HasPermissionsUuid;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name'
    ];
}
