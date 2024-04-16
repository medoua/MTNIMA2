<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class even extends Model
{
    use HasFactory;
    protected $fillable = ['nom_even','info_even'];
}
