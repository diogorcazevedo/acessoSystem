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


        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_list',
            'description' => 'Can list all users'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_add',
            'description' => 'Can add users'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_edit',
            'description' => 'Can edit users'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_destroy',
            'description' => 'Can destroy an user'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_view_roles',
            'description' => 'Can view the users roles'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_add_role',
            'description' => 'Can add a new role for an user'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_revoke_role',
            'description' => 'Can revoke a role for an user'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'permission_admin',
            'description' => 'Can admin all permissions'
        ]);
        factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'role_admin',
            'description' => 'Can admin all roles'
        ]);

    }

}
