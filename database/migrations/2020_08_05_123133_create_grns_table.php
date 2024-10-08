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
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('company_division_id')->nullable();
            $table->unsignedInteger('supplier_id')->nullable();
            $table->unsignedInteger('created_by');
            $table->unsignedInteger('company_purchase_order_id')->nullable();

            $table->text('code'); //create unique code.example GRN-2012-12-04-{grn_id}
            $table->date('date')->default(\Carbon\Carbon::now());
            $table->boolean('posted_to_stock')->default(false);
            $table->double('total')->default(0);
            $table->boolean('commit')->default(false);
            $table->longText('remarks')->nullable();

            $table->string('userdef1')->nullable();
            $table->string('userdef2')->nullable();
            $table->string('userdef3')->nullable();
            $table->string('userdef4')->nullable();
            $table->string('userdef5')->nullable();
            $table->string('userdef6')->nullable();
            $table->string('userdef7')->nullable();
            $table->string('userdef8')->nullable();
            $table->string('userdef9')->nullable();

            $table->foreign('company_id')
                ->references('id')
                ->on('companies');

            $table->foreign('company_division_id')
                ->references('id')
                ->on('company_divisions');

            $table->foreign('supplier_id')
                ->references('id')
                ->on('suppliers');

            $table->foreign('created_by')
                ->references('id')
                ->on('users');

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
