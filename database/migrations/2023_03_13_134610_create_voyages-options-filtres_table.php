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
        Schema::create('travels_options_filters', function (Blueprint $table) {
            $table->id();

            $table->foreignid('travel_id')
            ->nullable()
            ->constrained('travels')
            ->onDelete('cascade');

            $table->foreignid('option-filter_id')
            ->nullable()
            ->constrained('options-filters')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travels_options_filters');
        
    }
};
