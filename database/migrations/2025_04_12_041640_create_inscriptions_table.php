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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('competitor_id')->constrained()->onDelete('cascade');
            $table->foreignId('olympic_id')->constrained()->onDelete('cascade');
            $table->foreignId('payment_order_id')->nullable()->constrained()->onDelete('set null');

            $table->enum('status', ['pending', 'validated', 'rejected'])->default('pending');
            $table->text('observation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
