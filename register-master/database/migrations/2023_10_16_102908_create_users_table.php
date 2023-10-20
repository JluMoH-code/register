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
            $table->string('login');
            $table->string('email');
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('secondary_name')->nullable();
            $table->date('birthday')->nullable();
            $table->decimal('phone_number')->nullable();
            $table->text('about')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

            $table->softDeletes();
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
