<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptfs_ch extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_sect','id_ptfs'
            ];

     public function secteurs()
            {
                return $this->belongsTo(secteur::class, 'id');
            }  
}
