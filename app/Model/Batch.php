<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Batch extends Model
{
    use SoftDeletes;

    protected $table = 'batch'; 
    protected $fillable =  ['id','code','year','active','max_capacity','current_capacity','deleted_at','created_at','updated_at'];

}
