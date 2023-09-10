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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->string('full_name');
            $table->string('age');
            $table->string('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('contact_number');
            $table->string('address');
            $table->string('email');
            $table->string('date');
            $table->string('time');
            $table->string('concern')->nullable();
            // Not Approved
            $table->string('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
