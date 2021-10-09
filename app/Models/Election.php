<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable=[
        'election_nm',
        'start_date',
        'end_date',
        'desc',
        'status'
    ];
}
