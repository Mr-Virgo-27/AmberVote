<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BallotQuestion extends Model
{
    use HasFactory;

    Protected $fillable =[

        'question',
    ];

    public function BallotOptions(){
        return $this->hasMany(BallotQuestion::class,'question_id');
    }
}
