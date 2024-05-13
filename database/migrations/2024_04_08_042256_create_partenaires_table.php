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
            $table->string("Denomination", 255); 
            $table->string("Adresse", 255); 
            $table->string("Email", 255); 
            $table->string("Tel", 20);
            $table->string("Pays", 100); 
            $table->string("numero_compte", 50);
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
