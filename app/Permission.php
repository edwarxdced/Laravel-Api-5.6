<?php

namespace App;

use App\Support\UuidScopeTrait;

/**
 * Class Permission
 * @package App
 */
class Permission extends \Spatie\Permission\Models\Permission {
    use UuidScopeTrait;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'guard_name'
    ];
}
