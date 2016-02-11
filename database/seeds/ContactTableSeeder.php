<?php


use Illuminate\Database\Seeder;
use acessoSystem\Entities\Contact;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(Contact::class, 20)->create();

    }
}
