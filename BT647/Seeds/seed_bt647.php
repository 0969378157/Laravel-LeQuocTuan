<?php

use Illuminate\Database\Seeder;

class seed_bt647 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Model_Bt647::class, 50)->create();
    }
}
