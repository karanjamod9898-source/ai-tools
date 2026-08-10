<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_tool_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('type', 40)->nullable()->index();
            $table->timestamps();
        });

        Schema::create('ai_tool_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ai_tool_id')->constrained('ai_tools')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['ai_tool_id', 'category_id']);
            $table->index('category_id');
        });

        Schema::create('ai_tool_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ai_tool_id')->constrained('ai_tools')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('ai_tool_tags')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['ai_tool_id', 'tag_id']);
            $table->index('tag_id');
        });

        Schema::create('online_tool_category', function (Blueprint $table) {
            $table->id();
            $table->foreignId('online_tool_id')->constrained('online_tools')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained('categories')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['online_tool_id', 'category_id']);
            $table->index('category_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('online_tool_category');
        Schema::dropIfExists('ai_tool_tag');
        Schema::dropIfExists('ai_tool_category');
        Schema::dropIfExists('ai_tool_tags');
    }
};
