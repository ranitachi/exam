<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Exam extends Model
{
    use SoftDeletes;

    protected $table = 'exam'; 
    protected $fillable =  ['id','code','name','time','num_of_question','question_1','question_2','question_3','question_4','total_score','passing_score','deleted_at','created_at','updated_at'];

    
}
