<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Album extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function albumable(): MorphTo
    {
        return $this->morphTo();
    }
}
