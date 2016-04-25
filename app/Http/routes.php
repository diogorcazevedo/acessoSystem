<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will registers all of the routes in an application.
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

    //auth recuperar email cadastrado
    Route::get('password/rescue',['as'=>'password.rescue','uses'=> 'Auth\PasswordController@rescue']);
    Route::post('password/email',['as'=>'password.email','uses'=> 'Auth\PasswordController@email']);



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

    Route::get('registers/create/{id}',['as'=>'registers.create','uses'=> 'Auth\RegistersController@create']);
    Route::post('registers/store',['as'=>'registers.store','uses'=> 'Auth\RegistersController@store']);
    Route::get('registers/login/{id}',['as'=>'registers.login','uses'=> 'Auth\RegistersController@login']);
    Route::post('registers/auth',['as'=>'registers.auth','uses'=> 'Auth\RegistersController@auth']);




    //ROTAS DE GRUPO DE USUÁRIOS

            Route::group(['middleware'=>'auth.checkrole:client'],function(){


                Route::get('layout/client',['as'=>'layout.client','uses'=> 'LayoutController@client']);

                //ADMINISTRACAO DE CADASTRO DE DADOS DOS CANDIDATOS
                Route::get('clients/password/{id}',['as'=>'clients.password','uses'=> 'Client\ClientsController@password']);
                Route::get('clients/edit/{id}',['as'=>'clients.edit','uses'=> 'Client\ClientsController@edit']);
                Route::post('clients/update/{id}',['as'=>'clients.update','uses'=> 'Client\ClientsController@update']);
                Route::post('clients/updatepassword/{id}',['as'=>'clients.updatepassword','uses'=> 'Client\ClientsController@updatepassword']);



                //RECURSOS
                Route::get('appeals/create',['as'=>'appeals.create','uses'=> 'AppealsController@create']);
                Route::post('appeals/store',['as'=>'appeals.store','uses'=> 'AppealsController@store']);

                //INSCRICAO
                Route::get('entries/create/{id}',['as'=>'entries.create','uses'=> 'Client\EntriesController@create']);
                Route::post('entries/store',['as'=>'entries.store','uses'=> 'Client\EntriesController@store']);
                Route::get('entries/edit/{id}',['as'=>'entries.edit','uses'=> 'Client\EntriesController@edit']);
                Route::post('entries/update/{id}',['as'=>'entries.update','uses'=> 'Client\EntriesController@update']);
                Route::get('entries/dispatch/{id}',['as'=>'entries.dispatch','uses'=> 'Client\EntriesController@dispatch']);


                //ISENCAO DE TAXA
                Route::get('frees/create/{id}/{entry_id}',['as'=>'frees.create','uses'=> 'Client\FreesController@create']);
                Route::post('frees/store/{entry_id}',['as'=>'frees.store','uses'=> 'Client\FreesController@store']);
                //---------recurso contra isencao
                Route::get('frees/edit/{id}',['as'=>'frees.edit','uses'=> 'Client\FreesController@edit']);
                Route::post('frees/update/{id}',['as'=>'frees.update','uses'=> 'Client\FreesController@update']);


                //BOLETO DE PAGAMENTO
                    //BRADESCO
                    Route::get('bradesco/toview/{id}',['as'=>'bradesco.toview','uses'=> 'Client\Bank\ClientBradescoController@toview']);
                    Route::get('bradesco/toprint/{id}',['as'=>'bradesco.toprint','uses'=> 'Client\Bank\ClientBradescoController@toprint']);


                    Route::post('bradesco/store',['as'=>'bradesco.store','uses'=> 'Client\Bank\ClientBradescoController@store']);
                    Route::get('bradesco/edit/{id}',['as'=>'bradesco.edit','uses'=> 'Client\Bank\ClientBradescoController@edit']);
                    Route::post('bradesco/update/{id}',['as'=>'bradesco.update','uses'=> 'Client\Bank\ClientBradescoController@update']);
                    Route::get('bradesco/dispatch/{id}',['as'=>'bradesco.dispatch','uses'=> 'Client\Bank\ClientBradescoController@dispatch']);



            });


            Route::group(['prefix'=>'admin','middleware'=>'auth.checkrole:admin','as'=>'admin.'],function(){
                //index
                Route::get('layout/admin',['as'=>'layout.admin','uses'=> 'LayoutController@admin']);



               //--------SYSTEM CONTROLLER ---------------//

                //Users
                Route::get('users',['as'=>'users.index','uses'=> 'Admin\System\UsersController@index']);
                Route::get('users/role/{id}',['as'=>'users.role','uses'=> 'Admin\System\UsersController@role']);
                Route::get('users/password/{id}',['as'=>'users.password','uses'=> 'Admin\System\UsersController@password']);
                Route::get('users/edit/{id}',['as'=>'users.edit','uses'=> 'Admin\System\UsersController@edit']);
                //updatesUsers
                Route::post('users/update/{id}',['as'=>'users.update','uses'=> 'Admin\System\UsersController@update']);
                Route::post('users/updatepassword/{id}',['as'=>'users.updatepassword','uses'=> 'Admin\System\UsersController@updatepassword']);
                Route::post('users/updaterole/{id}',['as'=>'users.updaterole','uses'=> 'Admin\System\UsersController@updaterole']);


                //Permissions and Roles

                Route::get('managers',['as'=>'managers.index','uses'=>'Admin\System\ManagersController@index']);

                Route::get('managers/roles/{id}',['as'=>'managers.roles','uses'=> 'Admin\System\ManagersController@roles']);
                Route::post('managers/roles/{id}/store',['as'=>'managers.roles.store','uses'=> 'Admin\System\ManagersController@storeRoles']);
                Route::get('managers/roles/{id}/revoke/{permission_id}',['as'=>'managers.roles.revoke','uses'=> 'Admin\System\ManagersController@revokeRoles']);


                Route::get('roles',['as'=>'roles.index','uses'=>'Admin\System\RolesController@index']);
                Route::get('roles/create',['as'=>'roles.create','uses'=> 'Admin\System\RolesController@create']);
                Route::post('roles/store',['as'=>'roles.store','uses'=> 'Admin\System\RolesController@store']);
                Route::get('roles/edit/{id}',['as'=>'roles.edit','uses'=> 'Admin\System\RolesController@edit']);
                Route::post('roles/update/{id}',['as'=>'roles.update','uses'=> 'Admin\System\RolesController@update']);
                Route::get('roles/destroy/{id}',['as'=>'roles.destroy','uses'=> 'Admin\System\RolesController@destroy']);

                Route::get('roles/permissions/{id}',['as'=>'roles.permissions','uses'=> 'Admin\System\RolesController@permissions']);
                Route::post('roles/permissions/{id}/store',['as'=>'roles.permissions.store','uses'=> 'Admin\System\RolesController@storePermissions']);
                Route::get('roles/permissions/{id}/revoke/{permission_id}',['as'=>'roles.permissions.revoke','uses'=> 'Admin\System\RolesController@revokePermissions']);



                Route::get('permissions',['as'=>'permissions.index','uses'=>'Admin\System\PermissionsController@index']);
                Route::get('permissions/create',['as'=>'permissions.create','uses'=> 'Admin\System\PermissionsController@create']);
                Route::post('permissions/store',['as'=>'permissions.store','uses'=> 'Admin\System\PermissionsController@store']);
                Route::get('permissions/edit/{id}',['as'=>'permissions.edit','uses'=> 'Admin\System\PermissionsController@edit']);
                Route::post('permissions/update/{id}',['as'=>'permissions.update','uses'=> 'Admin\System\PermissionsController@update']);
                Route::get('permissions/destroy/{id}',['as'=>'permissions.destroy','uses'=> 'Admin\System\PermissionsController@destroy']);




                //--------SPONSOR CONTROLLER ---------------//

                //bancas
                Route::get('bancas',['as'=>'bancas.index','uses'=> 'Admin\Sponsor\SponsorsController@index']);
                Route::get('bancas/create',['as'=>'bancas.create','uses'=> 'Admin\Sponsor\SponsorsController@create']);
                Route::post('bancas/store',['as'=>'bancas.store','uses'=> 'Admin\Sponsor\SponsorsController@store']);
                Route::get('bancas/edit/{id}',['as'=>'bancas.edit','uses'=> 'Admin\Sponsor\SponsorsController@edit']);
                Route::post('bancas/update/{id}',['as'=>'bancas.update','uses'=> 'Admin\Sponsor\SponsorsController@update']);


                //protocols
                Route::get('protocols',['as'=>'protocols.index','uses'=> 'Admin\Sponsor\ProtocolsController@index']);
                Route::get('protocols/create/{id}',['as'=>'protocols.create','uses'=> 'Admin\Sponsor\ProtocolsController@create']);
                Route::post('protocols/store',['as'=>'protocols.store','uses'=> 'Admin\Sponsor\ProtocolsController@store']);
                Route::get('protocols/edit/{id}',['as'=>'protocols.edit','uses'=> 'Admin\Sponsor\ProtocolsController@edit']);
                Route::post('protocols/update/{id}',['as'=>'protocols.update','uses'=> 'Admin\Sponsor\ProtocolsController@update']);



                //protocolsFiles
                Route::get('protocolsfile/{id}',['as'=>'protocolsfile.index','uses'=> 'Admin\Sponsor\ProtocolsFileController@index']);
                Route::get('protocolsfile/create/{id}',['as'=>'protocolsfile.create','uses'=> 'Admin\Sponsor\ProtocolsFileController@create']);
                Route::post('protocolsfile/store/{id}',['as'=>'protocolsfile.store','uses'=> 'Admin\Sponsor\ProtocolsFileController@store']);
                Route::get('protocolsfile/destroy/{id}',['as'=>'protocolsfile.destroy','uses'=> 'Admin\Sponsor\ProtocolsFileController@destroy']);


                //projects
                Route::get('projects',['as'=>'projects.index','uses'=> 'Admin\Sponsor\ProjectsController@index']);
                Route::get('projects/create/{id}',['as'=>'projects.create','uses'=> 'Admin\Sponsor\ProjectsController@create']);
                Route::post('projects/store',['as'=>'projects.store','uses'=> 'Admin\Sponsor\ProjectsController@store']);
                Route::get('projects/edit/{id}',['as'=>'projects.edit','uses'=> 'Admin\Sponsor\ProjectsController@edit']);
                Route::post('projects/update/{id}',['as'=>'projects.update','uses'=> 'Admin\Sponsor\ProjectsController@update']);
                Route::get('projects/destroy/{id}',['as'=>'projects.destroy','uses'=> 'Admin\Sponsor\ProjectsController@destroy']);



                        //--------SPONSOR BANKING CONTROLLER ---------------//

                        //boletos
                        Route::get('bankings',['as'=>'bankings.index','uses'=> 'Admin\Sponsor\Bank\BankingsController@index']);
                        Route::get('bankings/create',['as'=>'bankings.create','uses'=> 'Admin\Sponsor\Bank\BankingsController@create']);
                        Route::post('bankings/store',['as'=>'bankings.store','uses'=> 'Admin\Sponsor\Bank\BankingsController@store']);
                        Route::get('bankings/edit/{id}',['as'=>'bankings.edit','uses'=> 'Admin\Sponsor\Bank\BankingsController@edit']);
                        Route::post('bankings/update/{id}',['as'=>'bankings.update','uses'=> 'Admin\Sponsor\Bank\BankingsController@update']);


                        Route::get('bradesco',['as'=>'bradesco.index','uses'=> 'Admin\Sponsor\Bank\BradescoController@index']);
                        Route::get('bradesco/create/{id}',['as'=>'bradesco.create','uses'=> 'Admin\Sponsor\Bank\BradescoController@create']);
                        Route::post('bradesco/store',['as'=>'bradesco.store','uses'=> 'Admin\Sponsor\Bank\BradescoController@store']);
                        Route::get('bradesco/edit/{id}',['as'=>'bradesco.edit','uses'=> 'Admin\Sponsor\Bank\BradescoController@edit']);
                        Route::post('bradesco/update/{id}',['as'=>'bradesco.update','uses'=> 'Admin\Sponsor\Bank\BradescoController@update']);
                        Route::get('bradesco/destroy/{id}',['as'=>'bradesco.destroy','uses'=> 'Admin\Sponsor\Bank\BradescoController@destroy']);


                //--------END SPONSOR CONTROLLER ---------------//



                //--------EXECUTION CONTROLLER ---------------//

                //avisos
                Route::get('warnings',['as'=>'warnings.index','uses'=> 'Admin\Publish\WarningsController@index']);
                Route::get('warnings/create',['as'=>'warnings.create','uses'=> 'Admin\Publish\WarningsController@create']);
                Route::post('warnings/store',['as'=>'warnings.store','uses'=> 'Admin\Publish\WarningsController@store']);
                Route::get('warnings/edit/{id}',['as'=>'warnings.edit','uses'=> 'Admin\Publish\WarningsController@edit']);
                Route::post('warnings/update/{id}',['as'=>'warnings.update','uses'=> 'Admin\Publish\WarningsController@update']);


                //Etapas do concurso
                Route::get('deliverables',['as'=>'deliverables.index','uses'=> 'Admin\Publish\DeliverablesController@index']);
                Route::get('deliverables/create',['as'=>'deliverables.create','uses'=> 'Admin\Publish\DeliverablesController@create']);
                Route::post('deliverables/store',['as'=>'deliverables.store','uses'=> 'Admin\Publish\DeliverablesController@store']);
                Route::get('deliverables/edit/{id}',['as'=>'deliverables.edit','uses'=> 'Admin\Publish\DeliverablesController@edit']);
                Route::post('deliverables/update/{id}',['as'=>'deliverables.update','uses'=> 'Admin\Publish\DeliverablesController@update']);
                Route::get('deliverables/destroy/{id}',['as'=>'deliverables.destroy','uses'=> 'Admin\Publish\DeliverablesFileController@destroy']);

                //Arquivos das etapas
                Route::get('deliverablefiles/{id}',['as'=>'deliverablefiles.index','uses'=> 'Admin\Publish\DeliverableFilesController@index']);
                Route::get('deliverablefiles/create/{id}',['as'=>'deliverablefiles.create','uses'=> 'Admin\Publish\DeliverableFilesController@create']);
                Route::post('deliverablefiles/store/{id}',['as'=>'deliverablefiles.store','uses'=> 'Admin\Publish\DeliverableFilesController@store']);
                Route::get('deliverablefiles/destroy/{id}',['as'=>'deliverablefiles.destroy','uses'=> 'Admin\Publish\DeliverableFilesController@destroy']);



                //--------CLIENT CONTROLLER ---------------//

                //contato
                Route::get('contacts/index',['as'=>'contacts.index','uses'=> 'Client\ContactsController@index']);
                Route::get('contacts/open',['as'=>'contacts.open','uses'=> 'Client\ContactsController@open']);
                Route::post('contacts/update/{id}',['as'=>'contacts.update','uses'=> 'Client\ContactsController@update']);

                //Inscricoes
                Route::get('entries/index/{id}',['as'=>'entries.index','uses'=> 'Admin\Client\EntriesController@index']);
                Route::get('entries/edit/{id}/{project_id}',['as'=>'entries.edit','uses'=> 'Admin\Client\EntriesController@edit']);
                Route::post('entries/update/{id}',['as'=>'entries.update','uses'=> 'Admin\Client\EntriesController@update']);
                Route::get('entries/change/{id}/{project_id}',['as'=>'entries.change','uses'=> 'Admin\Client\EntriesController@change']);
                //Isencoes
                Route::get('frees/index/{id}',['as'=>'frees.index','uses'=> 'Admin\Client\FreesController@index']);
                Route::get('frees/edit/{id}',['as'=>'frees.edit','uses'=> 'Admin\Client\FreesController@edit']);
                Route::post('frees/update/{id}',['as'=>'frees.update','uses'=> 'Admin\Client\FreesController@update']);
                Route::get('frees/export/{id}',['as'=>'frees.export','uses'=> 'Admin\Client\FreesController@export']);


                //recursos
                Route::get('appeals/index/{id}',['as'=>'appeals.index','uses'=> 'Admin\Client\AppealsController@index']);
                Route::get('appeals/open/{id}',['as'=>'appeals.open','uses'=> 'Admin\Client\AppealsController@open']);
                Route::post('appeals/update/{id}',['as'=>'appeals.update','uses'=> 'Admin\Client\AppealsController@update']);


                //--------BANCO DE ITENS CONTROLLER ---------------//

                Route::get('bancas',['as'=>'bancas.index','uses'=> 'bancoItens\Admin\BancasController@index']);
                Route::get('bancas/create',['as'=>'bancas.create','uses'=> 'bancoItens\Admin\BancasController@create']);
                Route::post('bancas/store',['as'=>'bancas.store','uses'=> 'bancoItens\Admin\BancasController@store']);
                Route::get('bancas/edit/{id}',['as'=>'bancas.edit','uses'=> 'bancoItens\Admin\BancasController@edit']);
                Route::post('bancas/update/{id}',['as'=>'bancas.update','uses'=> 'bancoItens\Admin\BancasController@update']);
                Route::get('bancas/destroy/{id}',['as'=>'bancas.destroy','uses'=> 'bancoItens\Admin\BancasController@destroy']);



            });

});
