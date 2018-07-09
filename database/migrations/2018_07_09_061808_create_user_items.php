<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserItems extends Migration
{
    public function up()
    {
        Schema::create('user_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('item_id');
            $table->integer('item_count');
            $table->string('item_title');
            $table->boolean('exists');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('user_items');
    }
}
