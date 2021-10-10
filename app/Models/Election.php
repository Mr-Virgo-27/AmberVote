<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'election_nm',
        'start_date',
        'end_date',
        'desc',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ballot()
    {
        return $this->hasOne(Ballot::class);
    }
}
