<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'voter_id',
        'ballot_question_id',
        'answer',
    ];

    public function ballotQuestion()
    {
        return $this->belongsTo(BallotQuestion::class);
    }
}
