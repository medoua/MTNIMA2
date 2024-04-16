<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class org_ch extends Model
{
    use HasFactory;
    public function organisation()
    {
        return $this->belongsTo(Organisation::class, 'id');
    }

    //$table->org_ches;
    protected $fillable = [
        'id_org','id_sect','id_qui_paie','id_etat'
            ];
}
