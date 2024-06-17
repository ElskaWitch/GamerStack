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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // This will create a string field for the title
            $table->enum('console', ['PlayStation', 'Xbox', 'Switch', 'PC', 'Mobile']); // This will create an enum field for the console
            $table->string('image')->nullable(); // This will create a string field for the image, which can be null
            $table->timestamps(); // This will create created_at and updated_at fields
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};