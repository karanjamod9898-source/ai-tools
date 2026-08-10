<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('search_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->string('query')->index();
            $table->unsignedInteger('results_count')->default(0);
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->index('created_at');
        });

        Schema::create('popular_searches', function (Blueprint $table) {
            $table->id();
            $table->string('query')->unique();
            $table->unsignedBigInteger('search_count')->default(0)->index();
            $table->timestamp('last_searched_at')->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('popular_searches');
        Schema::dropIfExists('search_logs');
    }
};
