<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mission extends Model
{
    use HasFactory;
    protected $fillable = 
   ['Evenement',
    'Secteur_mis',
    'qui_Organise','lieu_mis','date_d','date_f',
    'theme_evenement',
    'Participants',
    'Nature_prise_en_charge',
    'Ordre_mission',
    'Resume_evenement','Pieces_Joint','lieu_prochain','Date_prochain'
    ];
}
