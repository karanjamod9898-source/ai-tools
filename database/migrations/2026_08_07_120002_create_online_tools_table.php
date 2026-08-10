<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('online_tools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('tool_key')->unique();
            $table->string('icon')->nullable();
            $table->string('status', 40)->default('draft')->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->unsignedBigInteger('views_count')->default(0);
            $table->unsignedBigInteger('uses_count')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'published_at']);
            $table->index(['is_featured', 'status']);
            // $table->fullText(['name', 'short_description', 'description']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('online_tools');
    }
};
