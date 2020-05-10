<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('suppliers')) {
            Schema::create('suppliers', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('address');
                $table->string('city')->nullable();
                $table->string('post_code')->nullable();
                $table->string('phone')->nullable();
                $table->string('cp')->nullable();
                $table->string('cp_phone')->nullable();
                $table->string('cp_email')->nullable();
                $table->string('website')->nullable();
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
        Schema::dropIfExists('suppliers');
    }
}
