<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Admin extends Model
{
    use HasFactory;
   // DB::insert('insert into Secteurs (id, nom_secteur) values (?, ?)', [1, 'Marc']);
$table ='Secteurs';
protected $fillable = ['nom_secteur'];
}
