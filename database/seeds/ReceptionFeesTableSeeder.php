<?php

use Illuminate\Database\Seeder;
use App\ReceptionFee;


class ReceptionFeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receptionFee = new ReceptionFee();
        $receptionFee->fee_name='Reception Fee';
        $receptionFee->price=2000;
        $receptionFee->save();
    }
}
