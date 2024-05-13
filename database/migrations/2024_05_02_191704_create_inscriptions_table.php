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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('set null');
            $table->unsignedBigInteger('eleve_id')->nullable();
            $table->foreign('eleve_id')->references('id')->on('eleves')->onDelete('set null');
            $table->string("Annee", 10);
            $table->string("Montant", 50);
            $table->string("MontantPaye", 50);
            $table->string("Valide", 10);
            $table->string("Paye", 10);
            $table->string("Inscrit", 10);
            $table->date("DateInscription");
            $table->time("HeureInscription");
            $table->string("NoInscription", 50);
            $table->string("Subvention", 50);
            $table->string("Reliquat", 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
