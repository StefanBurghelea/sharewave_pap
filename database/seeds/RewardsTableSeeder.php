<?php

use Illuminate\Database\Seeder;
use App\Reward;

class RewardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Reward::class, 10)->create();
    }
}
