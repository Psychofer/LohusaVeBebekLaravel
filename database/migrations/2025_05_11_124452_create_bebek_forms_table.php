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
        Schema::create('bebek_forms', function (Blueprint $table) {
            
            $table->id();
            $table->date('dogum_tarihi')->nullable();
            $table->string('kac_haftalik')->nullable();
            $table->date('muayene_tarihi')->nullable();
            $table->integer('izlem_sayisi')->nullable();
            $table->enum('termin_durumu', ['Term', 'Prematür', 'Postmatür'])->nullable();
            $table->string('cinsiyet')->nullable();
            $table->integer('kacinci_cocuk')->nullable();
            $table->string('kan_grubu')->nullable();

            // Vital bulgular
            $table->float('ates')->nullable();
            $table->integer('nabiz')->nullable();
            $table->integer('solunum')->nullable();
            $table->float('kilo')->nullable();
            $table->float('boy')->nullable();
            $table->float('bas_cevresi')->nullable();
            $table->float('gogus_cevresi')->nullable();

            // Klinik gözlemler
            $table->json('deri')->nullable();
            $table->json('bas')->nullable();
            $table->json('gozler')->nullable();
            $table->json('burun')->nullable();
            $table->json('agiz')->nullable();
            $table->json('kulak')->nullable();
            $table->json('boyun')->nullable();
            $table->json('gogus')->nullable();
            $table->json('abdomen')->nullable();
            $table->json('kasik')->nullable();
            $table->json('genital')->nullable();
            $table->json('solunum_sistemi')->nullable();
            $table->json('kvs')->nullable();
            $table->json('gis')->nullable();
            $table->json('uriner')->nullable();
            $table->json('kas_iskelet')->nullable();
            $table->json('norolojik')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebek_forms');
    }
};
