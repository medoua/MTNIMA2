<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Organisations', function (Blueprint $table) {
            $table->id();
            $table->string('Ce_formulair');
            $table->string('Nom_Org');
            $table->string('Secteur_Org');
            $table->string('Mission_Org');
            $table->string('Statut_Org');
            $table->Date('Date_Org');
            $table->string('Histo');
            $table->string('Siege_Org');
            $table->Date('Date_adh_Mauri');
            $table->string('Cotisation');
            $table->string('Montant_coti');
            $table->string('Peie_Org');
            $table->string('Etat_cotise_Org');
            $table->string('Sie_web_Org');
            $table->string('Contacts_Org');
            $table->string('Postes_ocuup');
            $table->string('Candid_Mau_Org');
            $table->string('Degres_Org');
            $table->string('PF_MTNIMA');
            $table->timestamps();
        });
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
