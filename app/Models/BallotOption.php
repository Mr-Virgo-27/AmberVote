<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BallotOption extends Model
{
    use HasFactory;

    Protected $fillable =[
        'question_id',
        'ballot_id',
        'option',
        'max_res',
        'min_res',
        'photo',
        'desc'
        ];

    public function BallotQuestions(){
        return $this->belongsTo(BallotQuestion::class,'question_id');
    }
}


