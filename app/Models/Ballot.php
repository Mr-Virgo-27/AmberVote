<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ballot extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_id',
        'ballot_type',
        'desc'
    ];

    public function election()
    {
        return $this->belongsTo(Election::class);
    }

    public function ballotQuestion()
    {
        return $this->hasMany(BallotQuestion::class);
    }

    public function ballotMsg()
    {
        return $this->hasMany(BallotMsg::class);
    }
}
