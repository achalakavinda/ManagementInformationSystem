<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkSheetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('job_type_id');
            $table->Integer('time_slot_id');
            $table->time('from');
            $table->time('to');
            $table->float('work_hrs');
            $table->float('hr_rate');
            $table->float('hr_cost');
            $table->text('remark')->nullable();
            $table->timestamps();


            $table->foreign('customer_id')->references('id')->on('customers')->onDelte('cascade');
            $table->foreign('project_id')->references('id')->on('projects')->onDelte('cascade');
            $table->foreign('job_type_id')->references('id')->on('job_types')->onDelte('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_sheets');
    }
}
