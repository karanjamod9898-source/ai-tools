<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type', 40)->index();
            $table->text('description')->nullable();
            $table->string('icon')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->unsignedInteger('sort_order')->default(0)->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->string('status', 40)->default('draft')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['type', 'status']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
