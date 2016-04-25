<?php
/**
 * Created by PhpStorm.
 * User: diogoazevedo
 * Date: 03/11/15
 * Time: 00:03
 */

namespace acessoSystem\Services;


use acessoSystem\Entities\Entry;
use acessoSystem\Entities\Free;
use acessoSystem\Entities\User;
use acessoSystem\Repositories\ContactRepository;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Repositories\FreeRepository;
use acessoSystem\Repositories\ProjectRepository;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class FreeService
{


    /**
     * @var FreeRepository
     */
    private $repository;
    /**
     * @var EntryRepository
     */
    private $entryRepository;
    /**
     * @var Free
     */
    private $free;
    /**
     * @var Entry
     */
    private $entry;
    /**
     * @var User
     */
    private $user;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    public function __construct(FreeRepository $repository,
                                EntryRepository $entryRepository,
                                Free $free,Entry $entry,User $user,
                                ProjectRepository $projectRepository)
    {


        $this->repository = $repository;
        $this->entryRepository = $entryRepository;
        $this->free = $free;
        $this->entry = $entry;
        $this->user = $user;
        $this->projectRepository = $projectRepository;
    }

    public function store($data,$entry_id)
    {
            \DB::beginTransaction();
            try {
                $free = $this->repository->create($data);
                $entry = $this->entryRepository->find($entry_id);
                $free->addEntry($entry);
                Session::put('success', 'Contato enviado com sucesso!');
                \DB::commit();
            } catch (\Exception $e) {
                \DB::rollback();
                throw $e;
            }
            Session::put('success', 'Contato enviado com sucesso!');
    }


    public function searchIndex($id)
    {

        if (!empty($id)) {
            $users = $this->user->select('name','entries.project_id as project_id' ,'email','entries.id as id','frees.user_id as user_id')
                                ->join('entries', 'users.id', '=', 'entries.user_id')
                                ->join('frees', 'users.id', '=', 'frees.user_id')
                                ->where('entries.project_id', $id);
            if ($users->count() > 0) {
                return $users->paginate(5);
            }
        }
    }


    public function search($search,$id)
    {

        if (!empty($search)) {
            $users = $this->user->select('name','entries.project_id as project_id' ,'email','entries.id as id','frees.user_id as user_id')
                                ->join('entries', 'users.id', '=', 'entries.user_id')
                                ->join('frees', 'users.id', '=', 'frees.user_id')
                                ->where('users.name', 'LIKE', '%' . $search . '%')
                                ->where('entries.project_id', '=', $id);
            if ($users->count() > 0) {
                return $users->paginate(5);
            } else {

                $users = $this->user->select('name','entries.project_id as project_id' , 'email','entries.id as id','frees.user_id as user_id')
                                    ->join('entries', 'users.id', '=', 'entries.user_id')
                                    ->join('frees', 'users.id', '=', 'frees.user_id')
                                    ->where('users.email', 'LIKE', '%' . $search . '%')
                                    ->where('entries.project_id', '=', $id);
                if ($users->count() > 0) {
                    return $users->paginate(5);
                }
            }
        }
    }


    public function query($id)
    {

        if (!empty($id)) {



            $users = $this->entry->select('*')
                                 ->join('projects', 'projects.id', '=', 'entries.project_id')
                                 ->join('entry_free', 'entries.id', '=', 'entry_free.entry_id')
                                 ->join('frees', 'entry_free.free_id', '=', 'frees.id')
                                 ->where('projects.id', $id)
                                 ->get();

            if ($users->count() > 0) {

                $entry = $this->entry->find($id);
                $protocol = $entry->project->protocol->protocol_number;
                $file = 'export_frees/01757321000106_'.$protocol.'_'.date('dmY').'_001.txt';

                foreach($users as $user):
                    $contents = $user->nome.';'
                                .$user->nis.';'
                                .$user->datadenascimento.';'
                                .$user->sexo.';'
                                .$user->num_identid_rg.';'
                                .$user->dt_identid_rg.';'
                                .$user->sg_em_identid_rg.';'
                                .$user->cpf.';'
                                .$user->nomedamae.  ";\r\n" ;

                    $bytes_written = File::append($file, $contents);
                    if ($bytes_written === false)
                    {
                        die("Error writing to file");
                    }
                endforeach;

                return $file;
            }

        }
    }


}