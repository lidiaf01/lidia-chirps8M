<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bulo extends Model
{
        protected $fillable = [
        'user_id',
    ];

    public function user(): belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
