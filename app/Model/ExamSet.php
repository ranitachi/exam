<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ExamSet extends Model
{
    use SoftDeletes;

    protected $table = 'exam_set'; 
    protected $fillable =  ['id','exam_participant_id','question_id','answer_id','score','deleted_at','created_at','updated_at'];

    public function examparticipant()
    {
        return $this->belongsTo('App\Model\ExamParticipant', 'exam_participant_id');
    }
    public function question()
    {
        return $this->belongsTo('App\Model\Question', 'question_id');
    }
    public function answer()
    {
        return $this->belongsTo('App\Model\Answer', 'answer_id');
    }
}
