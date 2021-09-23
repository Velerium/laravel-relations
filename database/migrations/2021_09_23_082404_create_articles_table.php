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
            $table->id();
            $table->string('title', 50);
            $table->date('date');
            $table->string('author', 50);
            $table->string('subtitle', 150);
            $table->string('category');
            $table->text('content');
            $table->text('picture');
            $table->unsignedBigInteger('author_id');
            $table->timestamps();
        });

        Schema::table('articles', function (Blueprint $table) {
            $table->foreign('author_id')->references('id')->on('authors');
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
