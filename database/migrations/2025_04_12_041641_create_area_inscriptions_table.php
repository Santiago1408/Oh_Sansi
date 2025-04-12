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
        Schema::create('area_inscriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('inscription_id')->constrained()->onDelete('cascade');
            $table->foreignId('area_level_grade_id')->constrained()->onDelete('cascade');

            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->text('observation')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('area_inscriptions');
    }
};
