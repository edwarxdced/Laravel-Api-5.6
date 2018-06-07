<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CountriesStatus extends Model
{	
	protected $table = "countries_status";
     /**
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];
}
