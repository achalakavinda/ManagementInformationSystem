<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGrnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grns', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_division_id')->nullable();
            $table->unsignedInteger('supplier_id');
            $table->unsignedInteger('created_by');

            $table->text('code')->unique(); //create unique code.example GRN-2012-12-04-{grn_id}
            $table->date('created_date')->default(\Carbon\Carbon::now());
            $table->boolean('posted_to_stock')->default(false);
            $table->boolean('posted_to_so')->default(false);
            $table->double('total')->default(0);

            $table->foreign('company_division_id')
                ->references('id')
                ->on('company_divisions')
                ->onDelete('cascade');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers')
                ->onDelete('cascade');

            $table->foreign('created_by')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

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
        Schema::dropIfExists('grns');
    }
}
