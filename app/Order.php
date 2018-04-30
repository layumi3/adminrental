<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'orders';
    protected $fillable = [
        'product_id','agent_id','user_id','status', 'order_time','order_created', 'rent_duration', 'delivery_type', 'total_price'
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
