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
        Schema::create('category_subcategory', function (Blueprint $table) {
            $table->foreignId('cate_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('subcate_id')->constrained('subcategories')->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_subcategory');
    }
};
