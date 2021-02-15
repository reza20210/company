<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('companyEmail')->unique();
            $table->string('companyTitle');
            $table->unsignedInteger('companyLogoId');
            $table->string('companyAgentName');
            $table->string('companyAgentRole');
            $table->string('companyAgentEmail')->unique();
            $table->unsignedInteger('companyAgentPhotoId');
            $table->text('companyAgentComment');

            $table->foreign('companyLogoId')->references('id')->on('photos')->onDelete('cascade');
            $table->foreign('companyAgentPhotoId')->references('id')->on('photos')->onDelete('cascade');

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
        Schema::dropIfExists('customers');
    }
}
