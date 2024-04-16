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
        Schema::create('missions',function (Blueprint $table) {
        
            $table->id();
            $table->string('Evenement');
            $table->string('Secteur_mis');
            $table->string('qui_Organise');
            $table->string('lieu_mis');
            $table->Date('date_d');
            $table->Date('date_f');
            $table->string('theme_evenement');
            $table->string('Participants');
            $table->string('Nature_prise_en_charge');
            $table->string('Ordre_mission');
            $table->string('Resume_evenement');
            $table->string('Pieces_Joint');
            $table->string('lieu_prochain');
            $table->Date('Date_prochain');
            
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
