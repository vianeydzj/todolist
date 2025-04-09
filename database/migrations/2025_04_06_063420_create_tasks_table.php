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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table -> string("task");
            $table->string('title');
            $table->text('description')->nullable();
            $table->enum('status', ['pendiente', 'en progreso', 'completada'])->default('pendiente');
            $table->date('date_ven')->nullable();
            $table->boolean('priority')->default(false);
            $table->enum('category', ['trabajo', 'estudio', 'casa', 'personal', 'finanzas', 'salud', 'viaje', 'social', 'tecnología']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
