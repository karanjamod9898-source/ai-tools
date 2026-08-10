<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ai_tools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->string('website_url', 2048)->nullable();
            $table->string('logo')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('pricing_type', 40)->nullable()->index();
            $table->decimal('starting_price', 10, 2)->nullable();
            $table->boolean('has_free_plan')->default(false)->index();
            $table->boolean('has_free_trial')->default(false)->index();
            $table->string('status', 40)->default('draft')->index();
            $table->boolean('is_featured')->default(false)->index();
            $table->boolean('is_verified')->default(false)->index();
            $table->decimal('average_rating', 3, 2)->default(0)->index();
            $table->unsignedInteger('reviews_count')->default(0);
            $table->unsignedBigInteger('views_count')->default(0);
            $table->unsignedBigInteger('clicks_count')->default(0);
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url', 2048)->nullable();
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
        Schema::dropIfExists('ai_tools');
    }
};
