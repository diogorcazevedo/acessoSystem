<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;

use acessoSystem\Repositories\ContactRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class AppealService
{


    /**
     * @var ContactRepository
     */
    private $repository;

    public function __construct(ContactRepository $repository)
    {


        $this->repository = $repository;
    }

    public function store($request)
    {

        $data = $request->all();

        if(empty($request['image'])):
            $this->repository->create($data);
            Session::put('success', 'Contato enviado com sucesso!');
        else:
            \DB::beginTransaction();
            try {
                $file = $request->file('image');
                $data['extension'] = $file->getClientOriginalExtension();
                $data['file'] = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $id = $this->repository->create($data);
                Storage::disk('local_contacts')->put($id['id']. '.' .$extension, File::get($file));
                \DB::commit();
            } catch (\Exception $e) {
                \DB::rollback();
                throw $e;
            }
            Session::put('success', 'Contato enviado com sucesso!');
        endif;

    }

}