<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ExamScore extends Model
{
    use SoftDeletes;

    protected $table = 'exam_score'; 
    protected $fillable =  ['id','exam_id','batch_participant_id','participant_id','score','deleted_at','created_at','updated_at'];

    public function exam()
    {
        return $this->belongsTo('App\Model\Exam', 'exam_id');
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
