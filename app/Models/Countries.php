<?php

namespace App\Models;

use App\Support\UuidScopeTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Countries extends Model
{
    use UuidScopeTrait, SoftDeletes;

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = [];

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'iso_code_alpha_2', 'iso_code_alpha_3','iso_code_numeric','phone_code','status_id'
    ];

    public function status()
    {
    	return $this->belongsTo(CountriesStatus::class, 'status_id', 'id');
    }
}
