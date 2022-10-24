<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Times extends Model
{
    use HasFactory;

    protected $fillable = [
        'time_1',
        'time_2',
        'time_3',
        'time_4'

    ];
}
