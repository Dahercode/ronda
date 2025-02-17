<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turn extends Model
{
    /** @use HasFactory<\Database\Factories\TurnFactory> */
    use HasFactory;

    protected $fillable = ['turn_number'];

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function round()
    {
        return $this->belongsTo(Round::class);
    }

    public function card() {
        return $this->belongsTo(Card::class);
    }
}
