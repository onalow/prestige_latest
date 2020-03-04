<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInvestments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments', function (Blueprint $table) {
             DB::statement("ALTER TABLE investments CHANGE COLUMN status status ENUM('active', 'pending','expired') NOT NULL DEFAULT 'pending'");
            $table->double('roi', 10,8)->default(0.0);
           
            $table->timestamp('expiry')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->dropColumn('expiry');
            $table->dropColumn('roi');
        });
    }
}
