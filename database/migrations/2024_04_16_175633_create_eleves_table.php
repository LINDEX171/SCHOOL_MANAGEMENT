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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string("Matricule", 20);
            $table->string("Prénom", 100);
            $table->string("Nom", 100);
            $table->string("Adresse", 255);
            $table->string("Email", 255);
            $table->date("DateNaissance");
            $table->string("LieuNaissance", 100);
            $table->string("Pays", 100);
            $table->string("Nationalite", 100);
            $table->string("TelEleve", 20);
            $table->string("NomPere", 100);
            $table->string("TelPere", 20);
            $table->string("NomMere", 100);
            $table->string("TelMere", 20);
            $table->string("saisipar", 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
