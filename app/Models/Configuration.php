<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Configuration extends Model
{
    use HasFactory;

    protected $fillable = [
        'quickhouse_email',
        'quickhouse_phone',
        'quickhouse_address',
        'quickhouse_name',
        'quickhouse_password'
    ];
}
