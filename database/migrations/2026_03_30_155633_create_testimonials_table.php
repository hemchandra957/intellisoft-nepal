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
        Schema::create('testimonials', function (Blueprint $table) {
            $table->id();
            $table->string('client_name'); // e.g., "John Doe"
            $table->string('company')->nullable(); // e.g., "Tech Solutions Nepal"
            $table->text('content'); // The actual review text
            $table->integer('rating')->default(5); // Star rating (1-5)
            $table->string('image')->nullable(); // Optional: Client's photo
            $table->boolean('is_visible')->default(true); // To show/hide on website
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('testimonials');
    }
};
