<?php

use acessoSystem\Entities\User;
use Illuminate\Database\Seeder;;
use acessoSystem\Entities\Client;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //ADMs do SISTEMA

        factory(User::class)->create([
            'name' => 'Diogo',
            'email' => 'diogorcazevedo@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283750',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'admin',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());


        factory(User::class)->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283751',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'admin',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());


        factory(User::class)->create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283722',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'admin',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());


        factory(User::class)->create([
            'name' => 'Supervisor',
            'email' => 'supervisor@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283732',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'admin',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());




        //CLIENTS do SISTEMA


        factory(User::class)->create([
            'name' => 'client',
            'email' => 'client@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283753',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'client',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());


        factory(User::class)->create([
            'name' => 'Contest',
            'email' => 'contest@gmail.com',
            'password' => bcrypt(123456),
            'cpf' => '09253283753',
            'identity' => '127954097',
            'dispatcher' => 'IFP-RJ',
            'role' => 'client',
            'remember_token' => str_random(10),
        ])->client()->save(factory(Client::class)->make());




        factory(User::class, 10)->create()->each(function ($u) {

            $u->client()->save(factory(Client::class)->make());
        });

    }
}
