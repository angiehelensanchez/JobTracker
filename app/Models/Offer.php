<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function techStack(){
        return $this->belongsToMany(TechStack::class);
    }
    public function jobportal(){
        return $this->belongsTo(JobPortal::class);
    }
  
    
    protected $fillable = [
        'company_id',
        'offer_name',
        'attendance',
        'salaryRange',
        'description',
        'jobportal_id',
    ];
}
