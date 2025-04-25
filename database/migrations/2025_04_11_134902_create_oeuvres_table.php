<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('oeuvres', function (Blueprint $table) {
            $table->id('idOeuvre');
            $table->string('nom');
            $table->text('description')->nullable();
            $table->integer('annee')->nullable();
            $table->unsignedBigInteger('idArtiste')->nullable();
            $table->unsignedBigInteger('idCategorie');
            $table->timestamps();
            
            $table->foreign('idArtiste')->references('idArtiste')->on('artistes')->onDelete('set null');
            $table->foreign('idCategorie')->references('idCategorie')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oeuvres');
    }
};
