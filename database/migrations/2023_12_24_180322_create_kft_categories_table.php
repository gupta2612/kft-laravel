<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKftCategoriesTable extends Migration
{
    // category
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kft_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name', 111);
            $table->string('slug', 111);
            $table->text('description',)->nullable();
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
        Schema::dropIfExists('kft_categories');
    }
}
