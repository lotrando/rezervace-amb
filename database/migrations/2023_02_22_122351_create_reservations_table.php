<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('last_name');
            $table->string('first_name');
            $table->integer('year');
            $table->integer('phone');
            $table->enum('evidence', ['Ne', 'Ano']);
            $table->enum('type', ['Ortopedie', 'Spondylochirurgie (nemoci páteře)']);
            $table->text('message');
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
        Schema::dropIfExists('reservations');
    }
}
