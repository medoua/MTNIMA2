<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Even_ch extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_period',
                'id_even'
            ];
}
