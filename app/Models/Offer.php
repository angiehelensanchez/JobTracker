<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    
    public function techStacks(){
        return $this->belongsToMany(TechStack::class, 'offer_tech_stacks');
    }
    public function advances(){
        return $this->hasMany(Advance::class, "offer_id");
    }
    protected $fillable = [
        'company_name',
        'offer_name',
        'attendance',
        'salary_range',
        'description',
        'url',
        'state'
    ];

}
