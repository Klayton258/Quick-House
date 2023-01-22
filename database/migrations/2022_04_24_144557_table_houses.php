<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableHouses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->default('1');
            $table->unsignedBigInteger('level_id')->default('1');
            $table->unsignedBigInteger('outdoor_id')->default('1');
            $table->string('visit_times');
            $table->string('promotion_price');
            $table->string('images');
            $table->string('path');
            $table->string('name');
            $table->string('price');
            $table->string('slug')->unique();
            $table->string('SKU');
            $table->unsignedInteger('quantity')->nullable(true);
            $table->string('rooms');
            $table->string('suit');
            $table->string('kitchen');
            $table->string('living_room');
            $table->string('wc');
            $table->string('garage');
            $table->string('location');
            $table->string('short_description')->nullable(true);
            $table->string('description')->nullable(true);
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
            $table->foreign('outdoor_id')->references('id')->on('outdoors')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('houses');
    }
}
