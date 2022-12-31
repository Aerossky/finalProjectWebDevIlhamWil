<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryGalleriesTable extends Migration
{
    public function up()
    {
        Schema::create('category_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('category_gallery_file');
            $table->string('category_name');
            $table->foreignId('pricelist_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_galleries');
    }
}
