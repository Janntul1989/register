<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phonenumber')->unique();
            $table->string('nid')->unique();
            $table->timestamp('nid_verified_at')->nullable();
            $table->text('addres');
            $table->text('animal');
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
        Schema::dropIfExists('article');
    }
};
