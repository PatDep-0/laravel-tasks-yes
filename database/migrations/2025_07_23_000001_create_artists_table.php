<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->string('artistID')->primary();
            $table->string('artistName');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artists');
    }
};
