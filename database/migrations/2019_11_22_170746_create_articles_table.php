<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('category_id')->unsigned();
            //$table->foreign('category_id')->references('id')->on('categories');
            $table->string('slug');
            $table->string('title');
            $table->text('content');
            $table->string('image_path');
            $table->integer('rank')->nullable();
            $table->dateTime('published_at');
            $table->string('og_title')->nullable();
            $table->string('og_description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
