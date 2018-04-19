<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ExamParticipant extends Model
{
    use SoftDeletes;

    protected $table = 'exam_participant'; 
    protected $fillable =  ['id','batch_exam_id','batch_participant_id','participant_id','ticket','active','remaining_time','pass','score','deleted_at','created_at','updated_at'];

    public function batchexam()
    {
        return $this->belongsTo('App\Model\BatchExam', 'batch_exam_id');
    }
    public function batchparticipant()
    {
        return $this->belongsTo('App\Model\BatchParticipant', 'batch_participant_id');
    }
    public function participant()
    {
        return $this->belongsTo('App\Model\Participant', 'participant_id');
    }
}
