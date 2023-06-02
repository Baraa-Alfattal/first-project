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
        Schema::create('about_developers', function (Blueprint $table) {
            $table->id();
            $table->longtext('descreption');
            $table->string('picture');
            $table->json('contact');
            $table->string('developer_link');
            $table->string('email')->unique();
            $table->json('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_developers');
    }
};
