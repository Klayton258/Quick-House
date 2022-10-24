<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'visit_id',
        'level_id',
        'outdoor_id',
        'promotion_id',
        'images',
        'name',
        'price',
        'rooms',
        'suit',
        'kitchen',
        'linving_room',
        'wc',
        'garage',
        'location',
        'description'

    ];
}
