<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('musicas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo'); // obrigatório [1][2]
            $table->unsignedInteger('numero_harpa')->nullable()->index(); // opcional [6]
            $table->unsignedInteger('numero_coletanea')->nullable()->index(); // opcional [6]
            $table->string('ritmo', 50)->nullable(); // ex: marcha, balada, samba [1]
            $table->string('tom', 10)->nullable();   // ex: C, D, Eb, F#m [1]
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('musicas');
    }
};
