<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Answer extends Model
{
    use SoftDeletes;

    protected $table = 'answer'; 
    protected $fillable =  ['id','question_id','content','correct','deleted_at','created_at','updated_at'];

    public function question()
    {
        return $this->belongsTo('App\Model\Question', 'question_id');
    }
}
