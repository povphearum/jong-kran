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
            $table->string('name');
            $table->mediumText('description');
            $table->integer('serving');
            $table->integer('prep_time');
            $table->integer('cook_time');
            $table->string('image')->nullable();
            $table->string('video')->nullable();
            $table->string('status')->default('pending');
            $table->foreignId('cate_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('event_id')->constrained('events')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('country_id')->constrained('countries')->onUpdate('cascade')->onDelete('cascade');
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
