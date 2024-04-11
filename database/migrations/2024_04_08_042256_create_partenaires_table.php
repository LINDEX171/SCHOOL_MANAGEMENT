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
        Schema::create('partenaires', function (Blueprint $table) {
            $table->bigIncrements('IDPartenaire');
            $table->String("Denomination");
            $table->String("Adresse");
            $table->String("Email");
            $table->String("Tel");
            $table->string("Pays");
            $table->String("numero_compte");
            $table->integer("montant_du");
            $table->integer("montant_paye");
            $table->integer("montant_initial");
            $table->mediumText("logo")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partenaires');
    }
};
