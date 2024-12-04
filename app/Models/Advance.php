<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    public function offer(){
        return $this->belongsTo(Offer::class, "offer_id");
    }
    protected $fillable = [
        'offer_id',
        'status',
        'phase',
        'commentary',
        
    ];
}