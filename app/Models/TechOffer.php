<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TechOffer extends Model
{
    protected $fillable = [
        'offer_id',
        'techstack_id',
    ];
}
