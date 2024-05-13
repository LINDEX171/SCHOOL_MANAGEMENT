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
        Schema::create('departements', function (Blueprint $table) {
            $table->id();
            $table->string("NomDepartement", 100);
            $table->string("Description", 255);
            $table->date("DateCreation");
            $table->string("Responsable", 100);
            $table->string("NombreEmployes", 50);
            $table->string("NombreEtudiants", 50);
            $table->string("Equipements", 255);
            $table->string("Contacts", 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('departements');
    }
};
