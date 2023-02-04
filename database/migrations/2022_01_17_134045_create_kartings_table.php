<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKartingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kartings', function (Blueprint $table) {
            $table->id();
            $table->string('lokacija');
            $table->string('radnoVreme');
            $table->string('pravilaStaze');
            $table->double('cena');
            $table->string('usluge');
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
        Schema::dropIfExists('kartings');
    }
}
