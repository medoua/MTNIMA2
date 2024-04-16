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
        Schema::create('Evenements',function (Blueprint $table) {
        
            $table->id();
            $table->string('Evenement');
            $table->string('Description');
            $table->string('qui_Orgqnise');
            $table->string('Inf_even');
            $table->string('Periodicite');
            $table->string('lieu_even');
            $table->Date('date_even');
            $table->string('theme_derier');
            $table->string('Participation_MTNIMA');
            $table->string('lieu_prochain');
            $table->Date('Date_prochain');
            $table->string('Degres_imp');
            $table->string('Niveau_imp');
            $table->string('Format_prochain');
            $table->string('Site_web_even');
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
