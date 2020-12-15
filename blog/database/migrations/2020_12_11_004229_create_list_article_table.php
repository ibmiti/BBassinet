<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('article', function (Blueprint $table) {
            $table->id();
            $table->string('heading1')->nullable();
            $table->string('image_name')->nullable();
            $table->string('paragraph1')->nullable();
            $table->string('heading2')->nullable();
            $table->string('image2_name')->nullable();
            $table->string('paragraph2')->nullable();
            $table->string('heading3')->nullable();
            $table->string('image3_name')->nullable();
            $table->string('paragraph3')->nullable();
            $table->string('heading4')->nullable();
            $table->string('image4_name')->nullable();
            $table->string('paragraph4')->nullable();
            $table->string('heading5')->nullable();
            $table->string('image5_name')->nullable();
            $table->string('paragraph5')->nullable();
            $table->string('heading6')->nullable();
            $table->string('image6_name')->nullable();
            $table->string('paragraph6')->nullable();
            $table->string('heading7')->nullable();
            $table->string('image7_name')->nullable();
            $table->string('paragraph7')->nullable();
            $table->string('heading8')->nullable();
            $table->string('image8_name')->nullable();
            $table->string('paragraph8')->nullable();   
            $table->string('heading9')->nullable();
            $table->string('image9_name')->nullable();
            $table->string('paragraph9')->nullable();
            $table->string('heading10')->nullable();
            $table->string('image10_name')->nullable();
            $table->string('paragraph10')->nullable();
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
        Schema::dropIfExists('list_article');
    }
}