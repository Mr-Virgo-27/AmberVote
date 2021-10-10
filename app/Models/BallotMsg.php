<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BallotMsg extends Model
{
    use HasFactory;

    protected $fillable = [
        'ballot_id',
        'msg_type',
        'msg_desc'
    ];

    public function ballot()
    {
        return $this->belongsTo(Ballot::class);
    }
}
