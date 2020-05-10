<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('assets')) {
            Schema::create('assets', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedInteger('astmodel_id');
                $table->unsignedInteger('manufacturer_id');
                $table->unsignedInteger('supplier_id');
                $table->unsignedInteger('category_id');
                $table->string('serial');
                $table->string('uom');
                $table->unsignedInteger('warehouse_id');
                $table->string('po')->nullable();
                $table->string('invoice')->nullable();
                $table->date('inv_dt')->nullable();
                $table->decimal('unit_cost')->nullable();
                $table->string('expenditure_type')->nullable();
                $table->string('depreciation_model')->nullable();
                $table->date('wrntyexp_dt')->nullable();
                $table->date('eol')->nullable();
                $table->string('asset_tag');
                $table->integer('employee_id')->nullable();
                $table->unsignedInteger('division_id')->nullable();
                $table->date('assigned_date')->nullable();
                $table->boolean('is_assigned')->default(0);
                $table->text('note')->nullable();
                $table->string('image')->nullable();
                $table->string('status');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assets');
    }
}
