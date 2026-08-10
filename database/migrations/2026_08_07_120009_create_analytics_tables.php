<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tool_clicks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ai_tool_id')->constrained('ai_tools')->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->string('referer', 2048)->nullable();
            $table->timestamps();

            $table->index('created_at');
        });

        Schema::create('tool_views', function (Blueprint $table) {
            $table->id();
            $table->morphs('viewable');
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tool_views');
        Schema::dropIfExists('tool_clicks');
    }
};
