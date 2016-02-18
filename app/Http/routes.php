<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('layout/app');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {

    Route::auth();
    Route::get('layout/index',['as'=>'layout.index','uses'=> 'LayoutController@index']);

    //rotas home
    Route::get('/home',['as'=>'home','uses'=> 'HomeController@index']);
    Route::get('home',['as'=>'home','uses'=> 'HomeController@index']);
    Route::get('/',['as'=>'home.index','uses'=> 'HomeController@index']);
    Route::get('home/index',['as'=>'home.index','uses'=> 'HomeController@index']);


    Route::get('home/enterprise',['as'=>'home.enterprise','uses'=> 'HomeController@enterprise']);
    Route::get('home/security'  ,['as'=>'home.security','uses'=> 'HomeController@security']);
    Route::get('home/evaluation',['as'=>'home.evaluation','uses'=> 'HomeController@evaluation']);
    Route::get('home/governance',['as'=>'home.governance','uses'=> 'HomeController@governance']);
    Route::get('home/publish/{id}',['as'=>'home.publish','uses'=> 'HomeController@publish']);

    Route::get('contacts/create',['as'=>'contacts.create','uses'=> 'Client\ContactsController@create']);
    Route::post('contacts/store',['as'=>'contacts.store','uses'=> 'Client\ContactsController@store']);




           //ROTAS DE GRUPO DE USUÁRIOS

            Route::group(['middleware'=>'auth.checkrole:client'],function(){


                Route::get('layout/client',['as'=>'layout.client','uses'=> 'LayoutController@client']);

                //Clients
                Route::get('clients/password/{id}',['as'=>'clients.password','uses'=> 'Client\ClientsController@password']);
                Route::get('clients/edit/{id}',['as'=>'clients.edit','uses'=> 'Client\ClientsController@edit']);
                Route::post('clients/update/{id}',['as'=>'clients.update','uses'=> 'Client\ClientsController@update']);
                Route::post('clients/updatepassword/{id}',['as'=>'clients.updatepassword','uses'=> 'Client\ClientsController@updatepassword']);



                //recursos
                Route::get('appeals/create',['as'=>'appeals.create','uses'=> 'AppealsController@create']);
                Route::post('appeals/store',['as'=>'appeals.store','uses'=> 'AppealsController@store']);



            });


            Route::group(['prefix'=>'admin','middleware'=>'auth.checkrole:admin','as'=>'admin.'],function(){
                //index
                Route::get('layout/admin',['as'=>'layout.admin','uses'=> 'LayoutController@admin']);



               //--------ADMIN CONTROLLER ---------------//

                //Users
                Route::get('users',['as'=>'users.index','uses'=> 'Admin\UsersController@index']);
                Route::get('users/role/{id}',['as'=>'users.role','uses'=> 'Admin\UsersController@role']);
                Route::get('users/password/{id}',['as'=>'users.password','uses'=> 'Admin\UsersController@password']);
                Route::get('users/edit/{id}',['as'=>'users.edit','uses'=> 'Admin\UsersController@edit']);
                //updatesUsers
                Route::post('users/update/{id}',['as'=>'users.update','uses'=> 'Admin\UsersController@update']);
                Route::post('users/updatepassword/{id}',['as'=>'users.updatepassword','uses'=> 'Admin\UsersController@updatepassword']);
                Route::post('users/updaterole/{id}',['as'=>'users.updaterole','uses'=> 'Admin\UsersController@updaterole']);


                //Permissions and Roles

                Route::get('managers',['as'=>'managers.index','uses'=>'Admin\ManagersController@index']);

                Route::get('managers/roles/{id}',['as'=>'managers.roles','uses'=> 'Admin\ManagersController@roles']);
                Route::post('managers/roles/{id}/store',['as'=>'managers.roles.store','uses'=> 'Admin\ManagersController@storeRoles']);
                Route::get('managers/roles/{id}/revoke/{permission_id}',['as'=>'managers.roles.revoke','uses'=> 'Admin\ManagersController@revokeRoles']);


                Route::get('roles',['as'=>'roles.index','uses'=>'Admin\RolesController@index']);
                Route::get('roles/create',['as'=>'roles.create','uses'=> 'Admin\RolesController@create']);
                Route::post('roles/store',['as'=>'roles.store','uses'=> 'Admin\RolesController@store']);
                Route::get('roles/edit/{id}',['as'=>'roles.edit','uses'=> 'Admin\RolesController@edit']);
                Route::post('roles/update/{id}',['as'=>'roles.update','uses'=> 'Admin\RolesController@update']);
                Route::get('roles/destroy/{id}',['as'=>'roles.destroy','uses'=> 'Admin\RolesController@destroy']);

                Route::get('roles/permissions/{id}',['as'=>'roles.permissions','uses'=> 'Admin\RolesController@permissions']);
                Route::post('roles/permissions/{id}/store',['as'=>'roles.permissions.store','uses'=> 'Admin\RolesController@storePermissions']);
                Route::get('roles/permissions/{id}/revoke/{permission_id}',['as'=>'roles.permissions.revoke','uses'=> 'Admin\RolesController@revokePermissions']);



                Route::get('permissions',['as'=>'permissions.index','uses'=>'Admin\PermissionsController@index']);
                Route::get('permissions/create',['as'=>'permissions.create','uses'=> 'Admin\PermissionsController@create']);
                Route::post('permissions/store',['as'=>'permissions.store','uses'=> 'Admin\PermissionsController@store']);
                Route::get('permissions/edit/{id}',['as'=>'permissions.edit','uses'=> 'Admin\PermissionsController@edit']);
                Route::post('permissions/update/{id}',['as'=>'permissions.update','uses'=> 'Admin\PermissionsController@update']);
                Route::get('permissions/destroy/{id}',['as'=>'permissions.destroy','uses'=> 'Admin\PermissionsController@destroy']);


                //--------SPONSOR CONTROLLER ---------------//



                //sponsors
                Route::get('sponsors',['as'=>'sponsors.index','uses'=> 'Sponsor\SponsorsController@index']);
                Route::get('sponsors/create',['as'=>'sponsors.create','uses'=> 'Sponsor\SponsorsController@create']);
                Route::post('sponsors/store',['as'=>'sponsors.store','uses'=> 'Sponsor\SponsorsController@store']);
                Route::get('sponsors/edit/{id}',['as'=>'sponsors.edit','uses'=> 'Sponsor\SponsorsController@edit']);
                Route::post('sponsors/update/{id}',['as'=>'sponsors.update','uses'=> 'Sponsor\SponsorsController@update']);


                //protocols
                Route::get('protocols',['as'=>'protocols.index','uses'=> 'Sponsor\ProtocolsController@index']);
                Route::get('protocols/create',['as'=>'protocols.create','uses'=> 'Sponsor\ProtocolsController@create']);
                Route::post('protocols/store',['as'=>'protocols.store','uses'=> 'Sponsor\ProtocolsController@store']);
                Route::get('protocols/edit/{id}',['as'=>'protocols.edit','uses'=> 'Sponsor\ProtocolsController@edit']);
                Route::post('protocols/update/{id}',['as'=>'protocols.update','uses'=> 'Sponsor\ProtocolsController@update']);



                //protocolsFiles
                Route::get('protocolsfile/{id}',['as'=>'protocolsfile.index','uses'=> 'Sponsor\ProtocolsFileController@index']);
                Route::get('protocolsfile/create/{id}',['as'=>'protocolsfile.create','uses'=> 'Sponsor\ProtocolsFileController@create']);
                Route::post('protocolsfile/store/{id}',['as'=>'protocolsfile.store','uses'=> 'Projects\ProtocolsFileController@store']);
                Route::get('protocolsfile/destroy/{id}',['as'=>'protocolsfile.destroy','uses'=> 'Projects\ProtocolsFileController@destroy']);


                //projects
                Route::get('projects',['as'=>'projects.index','uses'=> 'Sponsor\ProjectsController@index']);
                Route::get('projects/create',['as'=>'projects.create','uses'=> 'Sponsor\ProjectsController@create']);
                Route::post('projects/store',['as'=>'projects.store','uses'=> 'Sponsor\ProjectsController@store']);
                Route::get('projects/edit/{id}',['as'=>'projects.edit','uses'=> 'Sponsor\ProjectsController@edit']);
                Route::post('projects/update/{id}',['as'=>'projects.update','uses'=> 'Sponsor\ProjectsController@update']);
                Route::get('projects/destroy/{id}',['as'=>'projects.destroy','uses'=> 'Sponsor\ProjectsController@destroy']);





                //--------EXECUTION CONTROLLER ---------------//


                //avisos
                Route::get('warnings',['as'=>'warnings.index','uses'=> 'Execution\WarningsController@index']);
                Route::get('warnings/create',['as'=>'warnings.create','uses'=> 'Execution\WarningsController@create']);
                Route::post('warnings/store',['as'=>'warnings.store','uses'=> 'Execution\WarningsController@store']);
                Route::get('warnings/edit/{id}',['as'=>'warnings.edit','uses'=> 'Execution\WarningsController@edit']);
                Route::post('warnings/update/{id}',['as'=>'warnings.update','uses'=> 'Execution\WarningsController@update']);


                //Deliverables
                Route::get('deliverables',['as'=>'deliverables.index','uses'=> 'Execution\DeliverablesController@index']);
                Route::get('deliverables/create',['as'=>'deliverables.create','uses'=> 'Execution\DeliverablesController@create']);
                Route::post('deliverables/store',['as'=>'deliverables.store','uses'=> 'Execution\DeliverablesController@store']);
                Route::get('deliverables/edit/{id}',['as'=>'deliverables.edit','uses'=> 'Execution\DeliverablesController@edit']);
                Route::post('deliverables/update/{id}',['as'=>'deliverables.update','uses'=> 'Execution\DeliverablesController@update']);
                Route::get('deliverables/destroy/{id}',['as'=>'deliverables.destroy','uses'=> 'Execution\DeliverablesFileController@destroy']);

                //DeliverableFiles
                Route::get('deliverablefiles/{id}',['as'=>'deliverablefiles.index','uses'=> 'Execution\DeliverableFilesController@index']);
                Route::get('deliverablefiles/create/{id}',['as'=>'deliverablefiles.create','uses'=> 'Execution\DeliverableFilesController@create']);
                Route::post('deliverablefiles/store/{id}',['as'=>'deliverablefiles.store','uses'=> 'Execution\DeliverableFilesController@store']);
                Route::get('deliverablefiles/destroy/{id}',['as'=>'deliverablefiles.destroy','uses'=> 'Execution\DeliverableFilesController@destroy']);


                //recursos
                Route::get('appeals/index/{id}',['as'=>'appeals.index','uses'=> 'Execution\AppealsController@index']);
                Route::get('appeals/open/{id}',['as'=>'appeals.open','uses'=> 'Execution\AppealsController@open']);
                Route::post('appeals/update/{id}',['as'=>'appeals.update','uses'=> 'Execution\AppealsController@update']);


                //--------CLIENT CONTROLLER ---------------//

                //contato
                Route::get('contacts/index',['as'=>'contacts.index','uses'=> 'Client\ContactsController@index']);
                Route::get('contacts/open',['as'=>'contacts.open','uses'=> 'Client\ContactsController@open']);
                Route::post('contacts/update/{id}',['as'=>'contacts.update','uses'=> 'Client\ContactsController@update']);


            });

});
