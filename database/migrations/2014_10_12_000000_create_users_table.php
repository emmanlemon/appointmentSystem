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
            $table->unsignedBigInteger('service_id')->nullable();
            $table->foreign('service_id')
                    ->references('id')->on('services')
                    ->onDelete('cascade');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('address');
            $table->string('contact_number');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->longText('password');
            $table->string('image')->nullable();
            //client-0 doctor-1 admin-2
            $table->string('role');
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
