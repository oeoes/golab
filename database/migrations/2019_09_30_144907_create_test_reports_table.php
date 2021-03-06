<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_reports', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('produk');
            $table->string('parameter');
            $table->string('metode');
            $table->string('unit');
            $table->string('limit_min');
            $table->string('limit_max');
            $table->enum('master', ['true', 'false']);
            $table->string('result')->nullable();
            $table->string('tag')->nullable();
            $table->string('flag')->nullable();
            $table->string('before_value')->nullable();
            $table->string('after_value')->nullable();
            $table->string('distribution_value')->nullable();
            $table->string('coq_value')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('user_email');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_reports');
    }
}
