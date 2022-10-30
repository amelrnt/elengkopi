<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelianbahanbaku', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->unsignedInteger('idbahanbaku');
            $table->string('fraktur');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('biayapengiriman');
            $table->integer('biayapemesanan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelianbahanbaku');
    }
};
