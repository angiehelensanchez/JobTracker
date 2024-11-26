<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function techStacks(){
        return $this->belongsToMany(TechStack::class, 'offer_tech_stacks');
    }
    public function jobportal(){
        return $this->belongsTo(JobPortal::class);
    }
  
    
    protected $fillable = [
        'company_id',
        'offer_name',
        'attendance',
        'salary_range',
        'description',
        'jobportal_id',
    ];
}
