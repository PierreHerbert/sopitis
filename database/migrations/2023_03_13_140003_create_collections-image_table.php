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
        Schema::create('collections_images', function (Blueprint $table) {
            $table->id();

            $table->foreignid('image_id')
            ->nullable()
            ->constrained('images')
            ->onDelete('cascade');

            $table->foreignid('collection_id')
            ->nullable()
            ->constrained('collections')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('collections_images');
        
    }
};
