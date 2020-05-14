<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('path');
            $table->string('caption');
            $table->string('rating');
            $table->string('image_size');
            $table->bigInteger('id_location')->unsigned()->index();
            $table->foreign('id_location')->references('id')->on('locations');
            $table->bigInteger('id_user')->unsigned()->index();
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
