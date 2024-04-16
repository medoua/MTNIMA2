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
        Schema::create('ptfs',function (Blueprint $table) {
            
            $table->id();
            $table->string('nom_ins');
            $table->string('Secteur_PTFS');
            $table->string('Mission__PTFs');
            $table->string('Statut_Type');
            $table->string('Point_focal');
            $table->string('Hist_Coop');
            $table->string('Siege_PTFs');
            $table->string('programme');
            $table->string('Evenements');
            $table->string('Finnacements');
            $table->string('Site_web_PTFs');
            $table->string('Contacts_PTFs');

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
