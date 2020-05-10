<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('employees')) {
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->integer('employee_id');
                $table->string('email')->nullable();
                $table->string('supervisor_id')->nullable();
                $table->unsignedInteger('branch_id');
                $table->string('designation');
                $table->string('phone')->nullable();
                $table->string('department')->nullable();
                $table->unsignedInteger('division_id');
                $table->text('note')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
