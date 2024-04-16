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
        Schema::create('statuts', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Statut');
            $table->timestamps();
        });

        Schema::create('Secteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_secteur');
            $table->timestamps();
        });

        Schema::create('qui_orgs', function (Blueprint $table) {
            $table->id();
            $table->string('nom_qui_org');
            $table->timestamps();
        });
        

        Schema::create('Periodicites', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Perio');
            $table->timestamps();
        });
        
        Schema::create('Paticipations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Patici');
            $table->timestamps();
        });
        
        Schema::create('qui_paie_cotis', function (Blueprint $table) {
            $table->id();
            $table->string('nom_qui_paie_coti');
            $table->timestamps();
        });
        
        Schema::create('Etat_cotis', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Etat_coti');
            $table->timestamps();
        });
        
        Schema::create('Degres_impo_org_insts', function (Blueprint $table) {
            $table->id();
            $table->string('nom_Degres');
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
