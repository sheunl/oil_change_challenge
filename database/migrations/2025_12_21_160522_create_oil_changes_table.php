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
        Schema::create('oil_changes', function (Blueprint $table) {
            $table->id();
            $table->uuid('calculation_id')->unique();
            $table->integer('current_odometer');
            $table->date('previous_oil_change_date');
            $table->integer('previous_oil_change_odometer');
            $table->boolean('needs_oil_change');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oil_changes');
    }
};
