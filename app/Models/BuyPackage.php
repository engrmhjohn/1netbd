<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BuyPackage extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->hasOne(User::class,'id','admin_id');
    }
}
