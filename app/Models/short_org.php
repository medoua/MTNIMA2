<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class short_org extends Model
{  
    use HasFactory;
    protected $fillable = ['nom_org','info_org'];
}
