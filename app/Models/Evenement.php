<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
    'Evenement',
            'Description',
            'qui_Orgqnise',
            'Inf_even',
            'Periodicite','lieu_even','date_even','theme_derier',
            'Participation_MTNIMA','lieu_prochain','Date_prochain',
            'Degres_imp','Niveau_imp','Format_prochain','Site_web_even'
        ];
}
