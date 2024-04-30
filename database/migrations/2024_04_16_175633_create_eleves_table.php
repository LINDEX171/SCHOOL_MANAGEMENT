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
            $table->String("Matricule");
            $table->String("Prénom");
            $table->String("Nom");
            $table->String("Adresse");
            $table->String("Email");
            $table->date("DateNaissance");
            $table->String("LieuNaissance");
            $table->String("Pays");
            $table->String("Nationalite"); 
            $table->String("TelEleve");
            $table->String("NomPere");
            $table->String("TelPere");
            $table->String("NomMere");
            $table->String("TelMere");
            $table->String("saisipar");
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
