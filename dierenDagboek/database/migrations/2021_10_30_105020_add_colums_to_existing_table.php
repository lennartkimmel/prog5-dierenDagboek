<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToExistingTable extends Migration
{
    public function up()
    {

            Schema::table('posts', function (Blueprint $table) {
                $table->string('text');
                $table->string('created_by');
            });

    }
    
    public function down()
    {

            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('text');
                $table->dropColumn('created_by');
            });

    }
}
