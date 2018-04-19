<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Participant extends Model
{
    use SoftDeletes;

    protected $table = 'participant'; 
    protected $fillable =  ['id','code','name','alamat','email','telp','deleted_at','created_at','updated_at'];

}
