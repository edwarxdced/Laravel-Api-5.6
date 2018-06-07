<?php

namespace App\Transformers;

use App\Models\Countries;
use App\Models\CountriesStatus;
use App\Transformers\Users\UserTransformer;
use League\Fractal\TransformerAbstract;

/**
 * Class CountriesTransformer
 * @package App\Transformers
 */
class CountriesTransformer extends TransformerAbstract
{
    /**
     * @var array
     */
    protected $defaultIncludes = [];

    /**
     * @param Countries $model
     * @return array
     */
    public function transform(Countries $model)
    {
        return [
            'id'               => $model->uuid,
            'name'             => $model->name,
            'iso_code_alpha_2' => $model->iso_code_alpha_2,
            'iso_code_alpha_3' => $model->iso_code_alpha_3,
            'iso_code_numeric' => $model->iso_code_numeric  ,
            'phone_code'       => $model->phone_code,
            'status_id'        => $model->statu_id,
            'status'           => $model->status,
            'created_at'       => $model->created_at->toIso8601String(),
            'updated_at'       => $model->updated_at->toIso8601String()
        ];
    }
}