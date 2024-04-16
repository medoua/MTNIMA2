<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class organisation extends Model

{
    
    use HasFactory;

    protected $fillable = 
[
    'Ce_formulair',
    'Nom_Org',
    'Secteur_Org',
    'Mission_Org',
    'Statut_Org',
    'Date_Org',
    'Histo',
    'Siege_Org',
    'Date_adh_Mauri',
    'Cotisation',
    'Montant_coti',
    'Peie_Org',
    'Etat_cotise_Org',
    'Sie_web_Org',
    'Contacts_Org',
    'Postes_ocuup',
    'Candid_Mau_Org',
    'Degres_Org',
    'PF_MTNIMA'
];

}
 