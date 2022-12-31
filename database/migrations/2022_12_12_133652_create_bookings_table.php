<?php

use App\Models\Category_gallery;
use App\Models\Domisili;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('booking_name');
            $table->string('booking_email');
            $table->string('booking_phone');
            $table->string('booking_address');
            $table->date('booking_date');
            $table->foreignId('domisili_id')->constrained('domisilis')->references('id');
            $table->foreignId('category_gallery_id')->constrained('category_galleries')->references('id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
