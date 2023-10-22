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
        Schema::create('kullanici', function (Blueprint $table) {
            $table->id('kullanici_id');
            $table->string('kullanici_ad');
            $table->string('kullanici_soyad');
            $table->string('kullanici_resim');
            $table->string('kullanici_mail');
            $table->string('kullanici_tel');
            $table->string('kullanici_adres');
            $table->string('kullanici_sheher');
            $table->string('kullanici_olke');
            $table->string('kullanici_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kullanici');
    }
};
