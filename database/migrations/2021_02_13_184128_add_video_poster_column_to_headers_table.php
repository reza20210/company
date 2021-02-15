<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoPosterColumnToHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->integer('siteVideoPosterId')->unsigned()->nullable();

            $table->foreign('siteVideoPosterId')->references('id')->on('photos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->dropColumn('siteVideoPosterId');
        });
    }
}
