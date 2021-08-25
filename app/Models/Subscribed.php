<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribed extends Model
{
    use HasFactory;

    protected $fillable = [
        "email", "is_sent"
    ];
}
