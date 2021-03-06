<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesPostUserPivotTable extends Migration
{

    public function up()
    {
        Schema::create('post_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('post_user');
    }
}
