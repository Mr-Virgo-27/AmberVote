<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionVoter extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'voter_id'
    ];

    public function ballotQuestion()
    {
        return $this->belongsTo(BallotQuestion::class);
    }

    public function voter()
    {
        return $this->hasMany(Voter::class);
    }
}
