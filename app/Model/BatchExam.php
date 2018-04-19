<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BatchExam extends Model
{
    use SoftDeletes;

    protected $table = 'batch_exam'; 
    protected $fillable =  ['id','batch_id','exam_id','exam_name','date','time','active','deleted_at','created_at','updated_at'];

    public function exam()
    {
        return $this->belongsTo('App\Model\Exam', 'exam_id');
    }
    public function batch()
    {
        return $this->belongsTo('App\Model\Batch', 'batch_id');
    }
}
