<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id');            
            $table->string('uuid');
            $table->string('title');
            $table->text('body');
            $table->boolean('active');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('posts');
    }
}
