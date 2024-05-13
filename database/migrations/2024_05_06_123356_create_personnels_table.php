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
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string("Civilite", 20);
            $table->string("Nom", 100);
            $table->string("Prenom", 100);
            $table->string("Telephone", 20);
            $table->string("Email", 255);
            $table->string("Saisipar", 100);
            $table->string("Matricule", 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personnels');
    }
};
