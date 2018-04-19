<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Users extends Model
{
    use SoftDeletes;

    protected $table = 'users'; 
    protected $fillable =  ['id','name','email','password','level','remember_token','created_at','updated_at'];
}
