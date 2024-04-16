<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secteur extends Model 
{
    use HasFactory;
    protected $fillable = ['nom_secteur'];
    
    public function ptfs_ches()
    {
        return $this->belongsTo(ptfs_che::class, 'id_sect');
    }
}
