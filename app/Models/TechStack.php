<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechStack extends Model
{

    public function offers(){
        return $this->belongsToMany(Offer::class, 'offer_tech_stacks');
    }
    protected $fillable = [
        'name',
        'knowledge',
    ];
}
