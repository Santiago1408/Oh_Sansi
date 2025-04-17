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
        Schema::create('olympics', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->enum('state', ['registration', 'validation', 'competition', 'closed'])->default('registration');
            $table->text('description')->nullable();
            $table->date('date_ini');
            $table->date('date_fin');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('olympics');
    }
};
