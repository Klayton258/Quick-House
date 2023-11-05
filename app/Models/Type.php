<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\House;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;


    public function houses()
    {
        return $this->belongsToMany(House::class, 'house_types');
    }

}
