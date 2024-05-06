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
            $table->string("Annee");
            $table->String("Montant");
            $table->String("MontantPaye");
            $table->String("Valide");
            $table->String("Paye");
            $table->String("Inscrit");
            $table->date("DateInscription");
            $table->time("HeureInscription");
            $table->String("NoInscription");
            $table->String("Subvention");
            $table->String("Reliquat");
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
