<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 70)->unique();
            $table->string('nik', 16)->unique()->nullable();
            $table->string('privyId')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->date('tanggalLahir')->nullable();
            $table->string('provider')->nullable();
            $table->string('avatar')->nullable();
            $table->string('provider_id')->nullable();
            $table->text('provider_token')->nullable();
            $table->string('phone', 16)->unique()->nullable();
            $table->integer('step')->default(1);
            $table->integer('email_verified')->default(0);
            $table->integer('sms_verified')->default(0);
            $table->integer('ktp_verified')->default(0);
            $table->integer('liveness_verified')->default(0);
            $table->integer('privy_verified')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
