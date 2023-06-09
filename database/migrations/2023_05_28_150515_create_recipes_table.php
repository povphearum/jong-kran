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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade');
            $table->string('recipe_name');
            $table->mediumText('recipe_description');
            $table->integer('serving');
            $table->integer('prep_time');
            $table->string('prepMHD');
            $table->integer('cook_time');
            $table->string('cookMHD');
            $table->string('image');
            $table->string('video')->nullable();
            $table->mediumText('Note')->nullable();
            $table->string('status')->default('public');
            $table->foreignId('event_id')->nullable()->constrained('events')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->nullable()->constrained('countries')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
