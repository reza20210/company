<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVideoColumnToHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('headers', function (Blueprint $table) {
            $table->integer('siteVideoId')->unsigned()->nullable();

            $table->foreign('siteVideoId')->references('id')->on('photos')->onDelete('cascade');
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
            $table->dropColumn('siteVideoId');
        });
    }
}
