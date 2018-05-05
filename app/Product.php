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
        'id','user_id','brand', 'year', 'type', 'category', 'transmision', 'plat', 'latlong', 'address', 'hourly_price', 'daily_price', 'requirements', 'delivery_by_owner', 'delivery_by_user', 'delivery_fee', 'bank_account','img1',
        'img2','img3','status'
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

    public function updateProduct($data)
    {
            $product = $this->find($data['id']);
            $product->hourly_price = $data['hourly_price'];
            $product->save();
            return 1;
    }

    // additional functions
    // ==========================================================================================
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    // ==========================================================================================
}
