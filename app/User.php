<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'email', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function insert($dataArray){
        $insert = new User();
        $insert->firstname = $dataArray['fname'];
        $insert->lastname = $dataArray['lname'];
//        $insert->user_type = $dataArray['user_type'];
        $insert->contact = $dataArray['contact'];
        $insert->address = $dataArray['address'];
        $insert->email = $dataArray['email'];
        $insert->password = bcrypt($dataArray['password']);
        $insert->save();
    }
}