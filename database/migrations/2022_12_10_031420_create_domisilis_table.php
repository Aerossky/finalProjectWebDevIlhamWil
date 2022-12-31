<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDomisilisTable extends Migration
{
    public function up()
    {
        Schema::create('domisilis', function (Blueprint $table) {
            $table->id();

            $table->string('domisili_name');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('domisilis');
    }
}
