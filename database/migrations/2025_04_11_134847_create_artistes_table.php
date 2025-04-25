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
        Schema::create('artistes', function (Blueprint $table) {
            $table->id('idArtiste');
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artistes');
    }

    public function artiste()
    {
        return $this->belongsTo(Artiste::class, 'idArtiste');
    }
};
