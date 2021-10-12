<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuesOpt extends Model
{
    use HasFactory;

    protected $fillable = [
        'ballot_question_id',
        'option',
        'photo',
        'opts_desc'
    ];

    public function ballotQuestion()
    {
        return $this->belongsTo(BallotQuestion::class);
    }
}
