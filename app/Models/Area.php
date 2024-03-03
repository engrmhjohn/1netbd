<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
