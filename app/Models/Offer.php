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
  
    
    protected $fillable = [
        'company_id',
        'offer_name',
        'attendance',
        'salary_range',
        'description',
        'url',
        'state'
    ];
}
