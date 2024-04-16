<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ptfs extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'nom_ins','Secteur_PTFS','Mission__PTFs','Statut_Type',
            'Point_focal','Hist_Coop','Siege_PTFs','programme'
            ,'Evenements','Finnacements','Site_web_PTFs','Contacts_PTFs'
        ];
        public function secteurs(){
            return $this->belongsToMany(secteur::class, 'ptfs_ches', 'id_sect','id_ptfs');
        }

}

