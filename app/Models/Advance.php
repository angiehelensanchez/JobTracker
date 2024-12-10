<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advance extends Model
{
    use HasFactory;
/*     public function offer(){
        return $this->belongsTo(Offer::class, "offer_id");
    } */
    protected $fillable = [
        'offer_id',
        'state',
        'phase',
        'commentary',
        
    ];
}
