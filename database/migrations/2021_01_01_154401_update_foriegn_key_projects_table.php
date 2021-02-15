<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateForiegnKeyProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_category_id_foreign');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');

            $table->dropForeign('projects_photo_id_foreign');
            $table->foreign('photo_id')->references('id')->on('photos')->onDelete('cascade');

            $table->dropForeign('projects_user_id_foreign');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropForeign('projects_category_id_foreign');
            $table->dropForeign('projects_photo_id_foreign');
            $table->dropForeign('projects_user_id_foreign');
        });
    }
}
