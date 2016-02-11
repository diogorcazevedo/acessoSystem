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

    Route::get('contacts/create',['as'=>'contacts.create','uses'=> 'ContactsController@create']);
    Route::post('contacts/store',['as'=>'contacts.store','uses'=> 'ContactsController@store']);


    //rotas home
    Route::get('home',['as'=>'home','uses'=> 'HomeController@index']);
    Route::get('/',['as'=>'home.index','uses'=> 'HomeController@index']);
    Route::get('home/index',['as'=>'home.index','uses'=> 'HomeController@index']);
    Route::get('home/enterprise',['as'=>'home.enterprise','uses'=> 'HomeController@enterprise']);
    Route::get('home/security'  ,['as'=>'home.security','uses'=> 'HomeController@security']);
    Route::get('home/evaluation',['as'=>'home.evaluation','uses'=> 'HomeController@evaluation']);
    Route::get('home/governance',['as'=>'home.governance','uses'=> 'HomeController@governance']);
    Route::get('home/publish/{id}',['as'=>'home.publish','uses'=> 'HomeController@publish']);


    //rota de autenticacao
    Route::get('layout/index',['as'=>'layout.index','uses'=> 'LayoutController@index']);



            Route::group(['middleware'=>'auth.checkrole:client'],function(){


                Route::get('layout/client',['as'=>'layout.client','uses'=> 'LayoutController@client']);

                //edição de dados
                Route::get('users/edit/{id}',['as'=>'users.edit','uses'=> 'UsersController@edit']);
                Route::post('users/update/{id}',['as'=>'users.update','uses'=> 'UsersController@update']);


                //recursos
                Route::get('appeals/create',['as'=>'appeals.create','uses'=> 'AppealsController@create']);
                Route::post('appeals/store',['as'=>'appeals.store','uses'=> 'AppealsController@store']);



            });


            Route::group(['prefix'=>'admin','middleware'=>'auth.checkrole:admin','as'=>'admin.'],function(){
                //index
                Route::get('layout/admin',['as'=>'layout.admin','uses'=> 'LayoutController@admin']);

                //Users
                Route::get('users',['as'=>'users.index','uses'=> 'UsersController@index']);
                Route::get('users/role/{id}',['as'=>'users.role','uses'=> 'UsersController@role']);
                Route::get('users/password/{id}',['as'=>'users.password','uses'=> 'UsersController@password']);
                Route::get('users/edit/{id}',['as'=>'users.edit','uses'=> 'UsersController@edit']);
                //updatesUsers
                Route::post('users/update/{id}',['as'=>'users.update','uses'=> 'UsersController@update']);
                Route::post('users/updatepassword/{id}',['as'=>'users.updatepassword','uses'=> 'UsersController@updatepassword']);
                Route::post('users/updaterole/{id}',['as'=>'users.updaterole','uses'=> 'UsersController@updaterole']);


                //sponsors
                Route::get('sponsors',['as'=>'sponsors.index','uses'=> 'SponsorsController@index']);
                Route::get('sponsors/create',['as'=>'sponsors.create','uses'=> 'SponsorsController@create']);
                Route::post('sponsors/store',['as'=>'sponsors.store','uses'=> 'SponsorsController@store']);
                Route::get('sponsors/edit/{id}',['as'=>'sponsors.edit','uses'=> 'SponsorsController@edit']);
                Route::post('sponsors/update/{id}',['as'=>'sponsors.update','uses'=> 'SponsorsController@update']);


                //protocols
                Route::get('protocols',['as'=>'protocols.index','uses'=> 'ProtocolsController@index']);
                Route::get('protocols/create',['as'=>'protocols.create','uses'=> 'ProtocolsController@create']);
                Route::post('protocols/store',['as'=>'protocols.store','uses'=> 'ProtocolsController@store']);
                Route::get('protocols/edit/{id}',['as'=>'protocols.edit','uses'=> 'ProtocolsController@edit']);
                Route::post('protocols/update/{id}',['as'=>'protocols.update','uses'=> 'ProtocolsController@update']);

                //avisos
                Route::get('warnings',['as'=>'warnings.index','uses'=> 'WarningsController@index']);
                Route::get('warnings/create',['as'=>'warnings.create','uses'=> 'WarningsController@create']);
                Route::post('warnings/store',['as'=>'warnings.store','uses'=> 'WarningsController@store']);
                Route::get('warnings/edit/{id}',['as'=>'warnings.edit','uses'=> 'WarningsController@edit']);
                Route::post('warnings/update/{id}',['as'=>'warnings.update','uses'=> 'WarningsController@update']);

                //protocolsFiles
                Route::get('protocolsfile/{id}',['as'=>'protocolsfile.index','uses'=> 'ProtocolsFileController@index']);
                Route::get('protocolsfile/create/{id}',['as'=>'protocolsfile.create','uses'=> 'ProtocolsFileController@create']);
                Route::post('protocolsfile/store/{id}',['as'=>'protocolsfile.store','uses'=> 'ProtocolsFileController@store']);
                Route::get('protocolsfile/destroy/{id}',['as'=>'protocolsfile.destroy','uses'=> 'ProtocolsFileController@destroy']);


                //Deliverables
                Route::get('deliverables',['as'=>'deliverables.index','uses'=> 'DeliverablesController@index']);
                Route::get('deliverables/create',['as'=>'deliverables.create','uses'=> 'DeliverablesController@create']);
                Route::post('deliverables/store',['as'=>'deliverables.store','uses'=> 'DeliverablesController@store']);
                Route::get('deliverables/edit/{id}',['as'=>'deliverables.edit','uses'=> 'DeliverablesController@edit']);
                Route::post('deliverables/update/{id}',['as'=>'deliverables.update','uses'=> 'DeliverablesController@update']);
                Route::get('deliverables/destroy/{id}',['as'=>'deliverables.destroy','uses'=> 'DeliverablesFileController@destroy']);

                //DeliverableFiles
                Route::get('deliverablefiles/{id}',['as'=>'deliverablefiles.index','uses'=> 'DeliverableFilesController@index']);
                Route::get('deliverablefiles/create/{id}',['as'=>'deliverablefiles.create','uses'=> 'DeliverableFilesController@create']);
                Route::post('deliverablefiles/store/{id}',['as'=>'deliverablefiles.store','uses'=> 'DeliverableFilesController@store']);
                Route::get('deliverablefiles/destroy/{id}',['as'=>'deliverablefiles.destroy','uses'=> 'DeliverableFilesController@destroy']);



                //Deliverables
                Route::get('projects',['as'=>'projects.index','uses'=> 'ProjectsController@index']);
                Route::get('projects/create',['as'=>'projects.create','uses'=> 'ProjectsController@create']);
                Route::post('projects/store',['as'=>'projects.store','uses'=> 'ProjectsController@store']);
                Route::get('projects/edit/{id}',['as'=>'projects.edit','uses'=> 'ProjectsController@edit']);
                Route::post('projects/update/{id}',['as'=>'projects.update','uses'=> 'ProjectsController@update']);
                Route::get('projects/destroy/{id}',['as'=>'projects.destroy','uses'=> 'ProjectsController@destroy']);

                //contato
                Route::get('contacts/index',['as'=>'contacts.index','uses'=> 'ContactsController@index']);
                Route::get('contacts/open',['as'=>'contacts.open','uses'=> 'ContactsController@open']);
                Route::post('contacts/update/{id}',['as'=>'contacts.update','uses'=> 'ContactsController@update']);

                //recursos
                Route::get('appeals/index/{id}',['as'=>'appeals.index','uses'=> 'AppealsController@index']);
                Route::get('appeals/open/{id}',['as'=>'appeals.open','uses'=> 'AppealsController@open']);
                Route::post('appeals/update/{id}',['as'=>'appeals.update','uses'=> 'AppealsController@update']);

            });

});
