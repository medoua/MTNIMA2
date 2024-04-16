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
        Schema::create('org_chs',function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('id_org');
            $table->unsignedBigInteger('id_sect')->nullable();
            $table->unsignedBigInteger('id_qui_paie')->nullable();
            $table->unsignedBigInteger('id_etat')->nullable();
            
    
            $table->timestamps();
            $table->foreign('id_sect')->references('id')->on('secteurs');
            $table->foreign('id_qui_paie')->references('id')->on('qui_paie_cotis');
            $table->foreign('id_etat')->references('id')->on('etat_cotis');
            $table->foreign('id_org')->references('id')->on('organisations');
        });

        Schema::create('Even_chs',function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('id_period')->nullable();
            $table->unsignedBigInteger('id_even');
            $table->timestamps();
            $table->foreign('id_even')->references('id')->on('evenements');
            $table->foreign('id_period')->references('id')->on('periodicites');
        });
        Schema::create('ptfs_chs',function (Blueprint $table) {
        
            $table->id();
            $table->unsignedBigInteger('id_sect')->nullable();
            $table->unsignedBigInteger('id_ptfs');
            $table->timestamps();
            $table->foreign('id_sect')->references('id')->on('secteurs');
            $table->foreign('id_ptfs')->references('id')->on('ptfs');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
