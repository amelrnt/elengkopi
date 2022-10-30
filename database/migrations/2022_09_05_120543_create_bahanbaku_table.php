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
        Schema::create('bahanbaku', function (Blueprint $table) {
            // $table->id();
            $table->increments('id');
            $table->string('nama');
            $table->integer('jumlah');
            $table->string('satuan');
            $table->integer('biayapenyimpanan');
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
        Schema::dropIfExists('bahanbaku');
    }
};
