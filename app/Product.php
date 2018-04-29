<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';
    protected $fillable = [
        'name', 'available', 'user_id', 'province_id', 'category_id', 'sub_category_id', 'requirements', 'note'
    ];

    protected $hidden = [
        'user_id', 'province_id', 'category_id', 'sub_category_id'
    ];

    protected $attributes = [
        'note' => '',
        'available' => false,
        'requirements' => '',
    ];

    public $timestamps = false;


    // additional functions
    // ==========================================================================================
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    // ==========================================================================================
}
