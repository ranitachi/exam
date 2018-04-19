<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Question extends Model
{
    use SoftDeletes;

    protected $table = 'question'; 
    protected $fillable =  ['id','exam_id','code','content','weight','deleted_at','created_at','updated_at'];

    public function exam()
    {
        return $this->belongsTo('App\Model\Exam', 'exam_id');
    }
}
