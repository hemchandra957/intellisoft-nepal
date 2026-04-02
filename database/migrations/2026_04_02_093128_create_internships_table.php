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
        Schema::create('internships', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender')->nullable();
            $table->string('province');
            $table->string('district');
            $table->string('palika');
            $table->string('college');
            $table->string('faculty');
            $table->string('semester');
            $table->string('apply_for');
            $table->date('start_date');
            $table->string('photo')->nullable();
            $table->string('cv');
            $table->string('letter')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
