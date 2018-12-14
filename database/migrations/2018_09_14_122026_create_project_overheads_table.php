<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/*
 * this information are use to store the project assign costs
 * */

class CreateProjectOverheadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_cost_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('remarks')->nullable();
            $table->timestamps();
        });

        Schema::create('project_overheads', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('project_id');

            $table->unsignedInteger('project_cost_type_id')->nullable();
            $table->string('project_cost_type');
            $table->boolean('project_cost_default')->default(true);
            $table->double('cost')->default(0);
            $table->text('remarks')->nullable();


            $table->timestamps();
            $table->unsignedInteger('created_by_id');
            $table->unsignedInteger('updated_by_id');

            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
            $table->foreign('created_by_id')->references('id')->on('users');
            $table->foreign('updated_by_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_overheads');
        Schema::dropIfExists('project_cost_types');
    }
}
