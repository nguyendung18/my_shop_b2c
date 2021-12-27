<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableImages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_images', function (Blueprint $table) {
            $table->id();
            $table->string("path");//luu duong dan
            $table->tinyInteger("is_preview")->default(0); //0 laf anh thuong, 1 la anh dai dien
            $table->bigInteger("product_id");
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
        Schema::dropIfExists('table_images');
    }
}
