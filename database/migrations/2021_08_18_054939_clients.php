<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Clients extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Clients', function (Blueprint $table) {
            $table->id('id_client');
            $table->char('type',1);
            $table->string('name',150);
            $table->text('adress');
            $table->date('reg_date');
            $table->char('rfc',15);
            $table->integer('status');
            $table->unsignedBigInteger('cp');

            $table->foreign('cp')->references('d_codigo')->on('CP');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Clients');
    }
}
