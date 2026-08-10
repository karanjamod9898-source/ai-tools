<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 40)->default('user')->after('password')->index();
            $table->string('avatar')->nullable()->after('role');
            $table->string('status', 40)->default('active')->after('avatar')->index();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropSoftDeletes();
            $table->dropIndex(['role']);
            $table->dropIndex(['status']);
            $table->dropColumn(['role', 'avatar', 'status']);
        });
    }
};
