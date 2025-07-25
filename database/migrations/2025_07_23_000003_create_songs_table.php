<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->string('songID')->primary();
            $table->string('songTitle');
            $table->string('artistID');
            $table->foreign('artistID')->references('artistID')->on('artists')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('songs');
    }
};
