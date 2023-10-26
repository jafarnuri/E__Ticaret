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
        Schema::create('baglanti', function (Blueprint $table) {
            $table->id();
            $table->string('baglanti_tel');
            $table->string('baglanti_gsm');
            $table->string('baglanti_faks');
            $table->string('baglanti_mail');
            $table->string('baglanti_olke');
            $table->string('baglanti_sheher');
            $table->string('baglanti_adres');
            $table->string('baglanti_isvaxti');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baglanti');
    }
};
