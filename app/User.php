<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    public $timestamps = false;
    protected $fillable = [
        'name', 'email', 'password','phone', 'birth_date', 'facebook', 'whatapps', 'instagram'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function updateData($data)
    {
            $contact = $this->find($data['id']);
            $contact->name = $data['name'];
            $contact->email = $data['email'];
            $contact->save();
            return 1;
    }

}
