<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'contacts';
    
    public $timestamps = false;

    protected $fillable = [
        'user_id', 'address', 'website', 'no_wa', 'phone', 'line_id', 'email', 'latlong',
    ];

    protected $hidden = [
        'user_id'
    ];


    // additional functions
    // ==========================================================================================
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    // ==========================================================================================
}
