<?php

namespace App\Support;

use Webpatser\Uuid\Uuid;

/**
 * Trait UuidScopeTrait
 * @package App\Support
 */
trait UuidScopeTrait
{
    /**
    * @param $query
    * @param $uuid
    * @return mixed
    */
    public function scopeByUuid($query, $uuid)
    {
        return $query->where('uuid', $uuid);
    }
    /**
     *  Setup model event hooks
     */
    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->uuid = (string) Uuid::generate(4);
        });
    }
}