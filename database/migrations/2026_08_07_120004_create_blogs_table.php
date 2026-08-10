<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained('categories')->nullOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('status', 40)->default('draft')->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->unsignedBigInteger('views_count')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url', 2048)->nullable();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['status', 'published_at']);
            $table->index(['category_id', 'status']);
            // $table->fullText(['title', 'excerpt', 'content']);
        });

        Schema::create('blog_tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('blog_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('blog_id')->constrained('blogs')->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained('blog_tags')->cascadeOnDelete();
            $table->timestamps();

            $table->unique(['blog_id', 'tag_id']);
            $table->index('tag_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_tag');
        Schema::dropIfExists('blog_tags');
        Schema::dropIfExists('blogs');
    }
};
