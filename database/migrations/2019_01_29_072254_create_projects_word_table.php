<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsWordTable extends Migration
{
    /**
     * Run create projects word migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_word', function (Blueprint $table) {
            $table->increments('id_word');
            $table->string('title', 200);
            $table->string('version', 10);
            $table->smallInteger('language_id');
            $table->smallInteger('project_id');
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
        Schema::dropIfExists('projects_word');
    }
}
