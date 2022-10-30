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
        Schema::create('detailtransaksi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idtransaksi');
            $table->unsignedInteger('idmenu');
            $table->integer('idmenu');
            $table->integer('jumlah');
            $table->timestamps();
        });

        Schema::table('detailtransaksi', function (Blueprint $table) {
            $table->foreignId('idtransaksi')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detailtransaksi');
    }
};
