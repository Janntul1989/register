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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phonenumber')->unique();
            $table->string('nid')->unique();
            $table->timestamp('nid_verified_at')->nullable();
            $table->text('addres');
            $table->string('animal');
            $table->string('bird');
            $table->string('farmer');
            $table->string('licesnsnumber')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
