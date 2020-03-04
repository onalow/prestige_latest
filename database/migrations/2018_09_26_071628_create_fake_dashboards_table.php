<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFakeDashboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fake_dashboards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->nullable();
            $table->string('plan');
            $table->double('total_investment', 10, 2);
            $table->double('current_earning', 10, 2);
            $table->double('total_earning', 10, 2);
            $table->double('nfp_investment', 10, 2);
            $table->double('nfp_profit', 10, 2);
            $table->integer('referrals');
            $table->double('referral_bonus', 10, 2);
            $table->timestamps();
        });

        DB::table('fake_dashboards')->insert([
            'username' => 'Bernard',
            'plan' => 'Executive',
            'total_investment' => 565573,
            'current_earning' => 2647453,
            'total_earning' => 57348789,
            'nfp_investment' => 13328789,
            'nfp_profit' => 88789,
            'referrals' => 13,
            'referral_bonus' => 18757556,
            

        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fake_dashboards');
    }
}
