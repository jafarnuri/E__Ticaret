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
        Schema::create('ayarlar', function (Blueprint $table) {
            $table->id('ayar_id');

            $table->string('ayar_bashliq');
            $table->string('ayar_resim');
            $table->string('ayar_logo');
            $table->string('ayar_achiqlama');
            $table->string('ayar_kilidsoz');
            $table->string('ayar_yazar');

            $table->string('ayar_tel');
            $table->string('ayar_map');
            $table->string('ayar_faks');
            $table->string('ayar_mail');
            $table->string('ayar_olke');
            $table->string('ayar_sheher');
            $table->string('ayar_adres');
            $table->string('ayar_mesai');
            
            $table->string('ayar_facebook');
            $table->string('ayar_twitter');
            $table->string('ayar_google');
            $table->string('ayar_youtube');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ayarlar');
    }
};
