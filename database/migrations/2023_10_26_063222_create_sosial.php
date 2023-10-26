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
        Schema::create('sosial', function (Blueprint $table) {
            $table->id();
            $table->string('sosial_facebook');
            $table->string('sosial_twitter');
            $table->string('sosial_instagram');
            $table->string('sosial_youtube');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sosial');
    }
};
