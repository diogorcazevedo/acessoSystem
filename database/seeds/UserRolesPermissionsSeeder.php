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

        factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Admin',
            'description' => 'System Administrator'
        ]);




        $userManager = factory(\acessoSystem\Entities\User::class)->create([
            'name' => 'Manager da Silva',
            'email' => 'manager@admin.com',
            'password' => bcrypt(123456)
        ]);
        $roleManager = factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Manager',
            'description' => 'System Manager'
        ]);
        $userManager->addRole($roleManager);



        $userSupervisor = factory(\acessoSystem\Entities\User::class)->create([
            'name' => 'Supervisor da Silva',
            'email' => 'supervisor@admin.com',
            'password' => bcrypt(123456)
        ]);
        $roleSupervisor = factory(\acessoSystem\Entities\Role::class)->create([
            'name' => 'Supervisor',
            'description' => 'System Supervisor'
        ]);
        $userSupervisor->addRole($roleSupervisor);



        $userList = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_list',
            'description' => 'Can list all users'
        ]);
        $userAdd = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_add',
            'description' => 'Can add users'
        ]);
        $userEdit = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_edit',
            'description' => 'Can edit users'
        ]);
        $userDestroy = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_destroy',
            'description' => 'Can destroy an user'
        ]);
        $userViewRoles = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_view_roles',
            'description' => 'Can view the users roles'
        ]);
        $userAddRole = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_add_role',
            'description' => 'Can add a new role for an user'
        ]);
        $userRevokeRole = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'user_revoke_role',
            'description' => 'Can revoke a role for an user'
        ]);
        $managePermissions = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'permission_admin',
            'description' => 'Can admin all permissions'
        ]);
        $AdminRoles = factory(\acessoSystem\Entities\Permission::class)->create([
            'name'=>'role_admin',
            'description' => 'Can admin all roles'
        ]);
        $roleManager->addPermission($userList);
        $roleManager->addPermission($userEdit);
        $roleManager->addPermission($userAdd);
        $roleManager->addPermission($userViewRoles);
        $roleSupervisor->addPermission($userList);
        $roleSupervisor->addPermission($userViewRoles);
    }

}