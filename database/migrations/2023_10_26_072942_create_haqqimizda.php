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
        Schema::create('haqqimizda', function (Blueprint $table) {
            $table->id();
            $table->string('haqqimizda_baslik');
            $table->text('haqqimizda_umumi');
            $table->string('haqqimizda_logo');
            $table->string('haqqimizda_vidio');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('haqqimizda');
    }
};
