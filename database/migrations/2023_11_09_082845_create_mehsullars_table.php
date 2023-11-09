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
        Schema::create('mehsullars', function (Blueprint $table) {
            $table->id();
            $table->string('kategoriad');
            $table->string('mehsul_ad');
            $table->string('mehsul_endirimTarix')->nullable;
            $table->string('mehsul_model');
            $table->string('mehsul_resm');
            $table->text('mehsul_melumat');
            $table->float('mehsul_endirimqiymet')->nullable;
            $table->float('mehsul_qiymet');
            $table->string('mehsul_video');
            $table->string('mehsul_kilidsoz');
            $table->integer('mehsul_say');
            $table->integer('mehsul_size');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mehsullars');
    }
};
