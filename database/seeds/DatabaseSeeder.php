<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
       // $this->call(SponsorTableSeeder::class);
       // $this->call(ContactTableSeeder::class);
       // $this->call(ProjectTableSeeder::class);
       // $this->call(AppealTableSeeder::class);
        $this->call(UserRolesPermissionsSeeder::class);


    }
}
