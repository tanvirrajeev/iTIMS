<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAstmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('astmodels')) {
            Schema::create('astmodels', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->unsignedInteger('manufacturer_id');
                $table->unsignedInteger('category_id');
                $table->text('note')->nullable();
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
        Schema::dropIfExists('astmodels');
    }
}
