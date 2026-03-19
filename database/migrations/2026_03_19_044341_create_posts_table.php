<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('postss', function (Blueprint $table) {
            $table->id();
            $table->string('zagolovok', 50);
            $table->string('tekstzagolovoka');
            $table->date('datazagolovka');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postss');
    }
};
