<?php


use Illuminate\Database\Seeder;
use acessoSystem\Entities\Appeal;

class AppealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Appeal::class, 20)->create();

    }
}
