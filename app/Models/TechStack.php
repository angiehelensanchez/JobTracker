<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{
    use HasFactory;
    
    public function offers(){
        return $this->belongsToMany(Offer::class, 'offer_tech_stacks');
    }
    protected $fillable = [
        'name',
        'knowledge',
    ];
}
