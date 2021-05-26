<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlogin extends Model
{
    protected $table = 'userlogins';
    protected $primaryKey ='id';
    protected $fillable = ['firstname', 'lastname', 'email_account', 'username', 'password'];//
}
