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
        Schema::create('locatives', function (Blueprint $table) {
            $table->id();
            $table->string('designation');
            $table->string('photo');
            $table->string('localisation');
            $table->string('type');
            $table->foreignId('habitat_id')->references('id')->on('habitats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locatives');
    }
};
