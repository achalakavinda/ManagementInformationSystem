<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_items', function (Blueprint $table) {

            $table->increments('id');
            $table->unsignedInteger('stock_id')->nullable();
            $table->unsignedInteger('grn_item_id')->nullable();
            $table->unsignedInteger('invoice_item_id')->nullable();
            $table->unsignedInteger('brand_id');
            $table->unsignedInteger('item_code_id');
            $table->boolean('commit')->default(true);

            $table->string('item_code');//store stock item name, history log
            $table->double('item_unit_cost_from_table')->default(0);//store the value on item code table
            $table->double('unit_price')->default(0);//keep the unit price entered through the stock insert
            $table->double('created_qty')->default(0);//item created quantity
            $table->double('tol_qty')->default(0);//use this if create quantity, remove when realizing a invoice
            $table->double('total')->default(0);//use this if create quantity, remove when realizing a invoice


            $table->boolean("is_open_stock")->default(false);
            $table->unsignedInteger('company_division_id');
            $table->unsignedInteger('company_id');
            $table->timestamps();

            $table->foreign('brand_id')
                ->references('id')
                ->on('brands')
                ->onDelete('cascade');

            $table->foreign('company_division_id')
                ->references('id')
                ->on('company_divisions')
                ->onDelete('cascade');

            $table->foreign('company_id')
                ->references('id')
                ->on('companies')
                ->onDelete('cascade');

            $table->foreign('stock_id')
                ->references('id')
                ->on('stocks')
                ->onDelete('cascade');

            $table->foreign('item_code_id')
                ->references('id')
                ->on('item_codes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_items');
    }
}
