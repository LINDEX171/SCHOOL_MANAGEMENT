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
            $table->String("NomDepartement");
            $table->String("Description");
            $table->date("DateCreation");
            $table->String("Responsable");
            $table->String("NombreEmployes");
            $table->String("NombreEtudiants");
            $table->String("Equipements");
            $table->String("Contacts");
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
