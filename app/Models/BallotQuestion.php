<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BallotQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'ballot_id',
        'question',
        'max_res',
        'min_res',
        'desc'
    ];

    public function ballot()
    {
        return $this->belongsTo(Ballot::class);
    }

    public function quesOpt()
    {
        return $this->hasMany(QuesOpt::class);
    }

    public function questionVoter()
    {
        return $this->hasMany(QuestionVoter::class);
    }

    public function questionAnswer()
    {
        return $this->hasMany(QuestionAnswer::class);
    }
}
