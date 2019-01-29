<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVocableToProjectWordTable extends Migration
{
    /**
     * Add vocable to project word table migration.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projects_word', function (Blueprint $table) {
            $table->string('vocable',200)->after('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projects_word', function (Blueprint $table) {
            $table->dropColumn('vocable');
        });
    }
}
