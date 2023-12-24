<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKftAllpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kft_allposts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('title', 200)->nullable();
            $table->longText('content')->nullable();
            $table->string('tags', 200)->nullable();
            $table->string('slug', 200)->nullable();
            $table->string('image', 200)->nullable();
            $table->string('categories', 200)->nullable();
            $table->string('date')->nullable();
            $table->string('status', 200)->nullable();
            $table->boolean('comments')->default('0')->nullable();
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
        Schema::dropIfExists('kft_allposts');
    }
}
