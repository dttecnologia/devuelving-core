<?php

namespace devuelving\core;

use Illuminate\Database\Eloquent\Model;

class FranchiseDiscountsModel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'franchise_discounts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'franchise', 'type', 'target', 'discount',
    ];
}