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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->string('email')->unique();
            $table->string('number')->unique();
            $table->string('course');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('dob');
            $table->string('edu');
            $table->string('country');
            $table->string('perm_address');
            $table->string('current_address');
            $table->rememberToken();
            $table->timestamps();

            //date of test,place of test , photo ,name ,gender ,nationality ,address ,phone number,email
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
