<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_table', function (Blueprint $table) {
            $table->increments('id',48);
            $table->string('password',48)->nullable();
            $table->string('deadline',45)->nullable();
            $table->string('nickname',48)->nullable();
            $table->string('title',128)->nullable();
            $table->string('period',16)->nullable();
            $table->string('location',45)->nullable();
            $table->string('contents',1024)->nullable();
            $table->string('role',45)->nullable();
            $table->string('video',1024)->nullable();
            $table->string('caution',45)->nullable();
            $table->string('contact',45)->nullable();
            $table->string('today',45)->nullable();
            $table->string('format',45)->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
    }
}
