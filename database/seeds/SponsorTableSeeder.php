<?php


use Illuminate\Database\Seeder;
use acessoSystem\Entities\Sponsor;
use acessoSystem\Entities\Protocol;

class SponsorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        factory(Sponsor::class, 5)->create()->each(function ($u) {

            $u->protocols()->save(factory(Protocol::class)->make());
        });

    }
}
