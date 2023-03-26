<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fusion_bc_stores', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('hash');
            $table->string('access_token');
            $table->string('admin_email')->nullable();
            $table->string('is_active')->nullable();
            $table->string('is_removed')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fusion_bc_stores');
    }
};
