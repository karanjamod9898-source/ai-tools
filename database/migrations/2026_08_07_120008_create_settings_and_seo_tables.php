<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('group');
            $table->string('key');
            $table->longText('value')->nullable();
            $table->string('type', 40)->default('string');
            $table->boolean('is_public')->default(false)->index();
            $table->timestamps();

            $table->unique(['group', 'key']);
        });

        Schema::create('redirects', function (Blueprint $table) {
            $table->id();
            $table->string('from_url', 2048);
            $table->char('from_url_hash', 64)->unique();
            $table->string('to_url', 2048);
            $table->unsignedSmallInteger('status_code')->default(301);
            $table->boolean('is_active')->default(true)->index();
            $table->timestamps();
        });

        Schema::create('page_meta', function (Blueprint $table) {
            $table->id();
            $table->string('page_key')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('canonical_url', 2048)->nullable();
            $table->string('robots', 80)->default('index, follow');
            $table->json('schema_json')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('page_meta');
        Schema::dropIfExists('redirects');
        Schema::dropIfExists('settings');
    }
};
