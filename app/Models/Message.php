<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'contact_email',
        'message',
    ];

    protected $table = 'messages';

    public function messages ()
    {
        $this->belongsTo(Message::class, 'contact_email');
    }
}
