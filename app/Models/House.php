<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\WithPagination;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Spatial;
use App\Models\Type;

class House extends Model
{
    use WithPagination;
    use HasFactory;
    use SoftDeletes;
    use Resizable;
    use Spatial;



    public function locations()
    {
        return $this->belongsTo(Location::class, 'city_id');
    }

    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = "$value";

    }

    public function types()
    {
        return $this->belongsToMany(Type::class, 'house_types');
    }

}
