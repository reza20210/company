<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('description');
            $table->unsignedInteger('first_photo_id');
            $table->unsignedInteger('second_photo_id');
            $table->unsignedInteger('third_photo_id');
            $table->unsignedInteger('forth_photo_id');
            $table->unsignedInteger('fifth_photo_id');
            $table->unsignedInteger('sixth_photo_id');

            $table->foreign('first_photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('second_photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('third_photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('forth_photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('fifth_photo_id')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('sixth_photo_id')->references('id')->on('photos')->onDelete('cascade');
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
        Schema::dropIfExists('abouts');
    }
}
