<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;

use acessoSystem\Entities\Contact;
use acessoSystem\Repositories\ContactRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class ContactService
{


    /**
     * @var ContactRepository
     */
    private $repository;
    /**
     * @var Contact
     */
    private $contactt;
    /**
     * @var EmailService
     */
    private $emailService;

    public function __construct(ContactRepository $repository, Contact $contact, EmailService $emailService)
    {


        $this->repository = $repository;
        $this->contact = $contact;
        $this->emailService = $emailService;
    }

    public function store($request)
    {

        $data = $request->all();

        if (empty($request['image'])):
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
                Storage::disk('local_contacts')->put($id['id'] . '.' . $extension, File::get($file));
                \DB::commit();
            } catch (\Exception $e) {
                \DB::rollback();
                throw $e;
            }
            Session::put('success', 'Contato enviado com sucesso!');
        endif;

    }


    public function searchIndex($search)
    {

            $contacts = $this->contact->where('name', 'LIKE', '%' . $search . '%')
                ->orWhere('email', 'LIKE', '%' . $search . '%')
                ->orWhere('cel', 'LIKE', '%' . $search . '%')
                ->orWhere('about', 'LIKE', '%' . $search . '%')
                ->paginate(5);

            return $contacts;
    }



    public function search($search)
    {

        if (!empty($search)) {
                $contacts = $this->contact->where('name', 'LIKE', '%' . $search . '%')
                    ->where('status', '=', 0);
                if ($contacts->count() > 0) {
                    return $contacts->paginate(5);
                } else {

                    $contacts = $this->contact->where('email', 'LIKE', '%' . $search . '%')
                        ->where('status', '=', 0);
                    if ($contacts->count() > 0) {
                        return $contacts->paginate(5);
                    } else {
                        $contacts = $this->contact->where('about', 'LIKE', '%' . $search . '%')
                            ->where('status', '=', 0);
                        return $contacts->paginate(5);
                    }
                }
            }
    }


    public function returnContact($data,$id)
    {
            \DB::beginTransaction();
            try {
                $contact =$this->repository->find($data['id']);
                $info = [
                    'email' => $contact->email,
                    'name' =>$contact->name,
                    'return'=>$data['return']
                ];
                $this->emailService->sendEmailContact($info);
                $data['status'] = 1;
                $data['user_id'] = auth()->user()->id;
                $this->repository->update($data, $id);
                Session::put('success', 'Contato enviado com sucesso!');
                \DB::commit();
            } catch (\Exception $e) {
                \DB::rollback();
                throw $e;
            }



    }


}