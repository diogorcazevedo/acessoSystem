<?php

use Illuminate\Database\Seeder;

class UserRolesPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ADMs do sistema

        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Admin',
            'description' => 'System Administrator'
        ]);


        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Manager',
            'description' => 'System Manager'
        ]);


        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Supervisor',
            'description' => 'System Supervisor'
        ]);

        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Supervisor',
            'description' => 'System Supervisor'
        ]);


        //CLIENTS do sistema
        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Client',
            'description' => 'System Clients'
        ]);

        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Contest',
            'description' => 'System Contest'
        ]);

    }

}