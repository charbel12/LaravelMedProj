<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'code',
        'registration_num',
        'brand_name',
        'strength',
        'presentation',
        'form',
        'agent',
        'manufacturer',
        'country',
        'price'

    ];
}
