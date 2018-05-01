<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // use Authenticatable, Authorizable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'feedback';
    
    public $timestamps = false;

    protected $fillable = [
        'ket','id', 
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
