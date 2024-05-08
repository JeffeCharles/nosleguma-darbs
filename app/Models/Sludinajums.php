<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sludinajums extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Atteli',
        'Marka',
        'Modelis',
        'IzdosanasDatums',
        'MotoraTilpums',
        'Cena',
        'Bojajumi',
        'PapildusInfo',
        'Krasa',
        'nobraukums',
        'Atrumkarba',
        'DegvielasTips',
        'VirsbuvesVeids',
        'TehniskaApskate',
        'VinNummurs',
        'NummuraZime'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    
}
