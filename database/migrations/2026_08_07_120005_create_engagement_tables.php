<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('ai_tool_id')->constrained('ai_tools')->cascadeOnDelete();
            $table->unsignedTinyInteger('rating')->index();
            $table->string('title')->nullable();
            $table->text('review')->nullable();
            $table->string('status', 40)->default('pending')->index();
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'ai_tool_id']);
            $table->index(['ai_tool_id', 'status']);
        });

        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->morphs('favoritable');
            $table->timestamps();

            $table->unique(['user_id', 'favoritable_type', 'favoritable_id'], 'favorites_user_favoritable_unique');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('favorites');
        Schema::dropIfExists('reviews');
    }
};
