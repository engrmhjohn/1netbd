<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function paymentCategory()
    {
        return $this->hasOne(PaymentCategory::class,'id','payment_category_id');
    }
}
