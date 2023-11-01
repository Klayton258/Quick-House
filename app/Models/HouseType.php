<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class HouseType extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table ="house_types";

    protected $fillable = [
        'id',
        'name',
        'description'

    ];

}
