<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_messages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->index();
            $table->string('subject')->nullable();
            $table->text('message');
            $table->string('status', 40)->default('new')->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('created_at');
        });

        Schema::create('newsletter_subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->string('status', 40)->default('subscribed')->index();
            $table->string('source')->nullable()->index();
            $table->timestamp('subscribed_at')->nullable()->index();
            $table->timestamp('unsubscribed_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('newsletter_subscribers');
        Schema::dropIfExists('contact_messages');
    }
};
