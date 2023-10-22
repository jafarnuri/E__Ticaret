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
        Schema::create('sherhler', function (Blueprint $table) {
            $table->id('sherh_id');
            $table->integer('kullanici_id');
            $table->integer('mehsul_id');
            $table->text('sherh_detay');
            $table->enum('sherh_testiq',['1','0']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sherhler');
    }
};
