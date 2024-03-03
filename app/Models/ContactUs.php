<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mail;
use App\Mail\ContactMail;
  
class ContactUs extends Model
{
    use HasFactory;
  
    public $guarded = [];
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "thestrangerboyinthebox@gmail.com";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}