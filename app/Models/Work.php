<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $guarded = [];
    protected $en_visit_date = 'm/d/Y';
    use HasFactory;

    public function feedback()
    {
        return $this->hasOne(Feedback::class,'id','feedback_id');
    }
    public function employee()
    {
        return $this->hasOne(User::class,'id','employee_id');
    }
    public function region()
    {
        return $this->hasOne(Region::class,'id','region_id');
    }
    public function area()
    {
        return $this->hasOne(Area::class,'id','area_id');
    }
    public function whomMeet()
    {
        return $this->hasOne(WhomMeet::class,'id','meeting_person_id');
    }
    public function clientType()
    {
        return $this->hasOne(ClientType::class,'id','client_type_id');
    }
}
