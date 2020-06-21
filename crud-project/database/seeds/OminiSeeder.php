<?php

use Illuminate\Database\Seeder;
use App\OminiModel;

class OminiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OminiModel::class, 20)-> create();
    }
}
