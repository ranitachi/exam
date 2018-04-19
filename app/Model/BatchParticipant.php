<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class BatchParticipant extends Model
{
    use SoftDeletes;

    protected $table = 'batch_participant'; 
    protected $fillable =  ['id','batch_id','participant_id','active','deleted_at','created_at','updated_at'];

    public function batch()
    {
        return $this->belongsTo('App\Model\Batch', 'batch_id');
    }
    public function participant()
    {
        return $this->belongsTo('App\Model\Participant', 'participant_id');
    }
}
