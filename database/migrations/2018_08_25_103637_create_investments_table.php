<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('user_id');
            $table->double('earning', 10, 2)->default(0.00);//current earnings not yet paid out
            $table->double('cum_earning', 10,2)->default(0.00); //all earnings that have been paid out
            $table->double('amount', 10,2);
            $table->enum('status', ['active', 'pending'])->default('pending');
            $table->string('payment_id')->nullable();
            $table->timestamps();

            // $table->foreign('category_id')->references('id')
            //                               ->on('categories')
            //                               ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('investments');
    }
}
