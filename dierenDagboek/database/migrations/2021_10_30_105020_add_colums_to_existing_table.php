<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumsToExistingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

            Schema::table('posts', function (Blueprint $table) {
                $table->string('text');
                $table->string('created_by');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

            Schema::table('posts', function (Blueprint $table) {
                $table->dropColumn('text');
                $table->dropColumn('created_by');
            });

    }
}
