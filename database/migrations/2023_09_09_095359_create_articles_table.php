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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('phonenumber',11)->unique()->nullable();
            $table->timestamp('phonenumber_verified_at')->nullable();
            $table->string('nid')->unique()->nullable();
            $table->text('addres')->nullable();
            $table->string('animal')->nullable();
            $table->string('bird')->nullable();
            $table->string('farmer')->nullable();
            $table->string('licesnsnumber')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
