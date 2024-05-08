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
        Schema::create('sludinajums', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('Atteli');
            $table->string('Marka');
            $table->string('Modelis');
            $table->date('IzdosanasDatums');
            $table->decimal('MotoraTilpums');
            $table->decimal('Cena');
            $table->string('Bojajumi');
            $table->string('PapildusInfo')->nullable();
            $table->string('nobraukums');
            $table->string('Krasa');
            $table->string('Atrumkarba');
            $table->string('DegvielasTips');
            $table->string('VirsbuvesVeids');
            $table->date('TehniskaApskate');
            $table->string('VinNummurs')->unique();
            $table->string('NummuraZime')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sludinajums');
    }
};
