<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Livewire\WithPagination;

class House extends Model
{
    use WithPagination;
    use HasFactory;
    use SoftDeletes;


    protected $table = "houses";


    protected $fillable = [
        'id',
        'name',
        'city_id'

    ];

    public function houseTypes()
    {
        return $this->belongsTo(HouseType::class);
    }

    public function locations()
    {
        return $this->belongsTo(Location::class, 'city_id');
    }
}
