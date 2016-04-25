<?php

namespace acessoSystem\Http\Controllers\Admin\Client;


use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Http\Requests\EntryUpdateRequest;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Repositories\ProtocolRepository;
use acessoSystem\Services\EntryService;
use Illuminate\Http\Request;


class EntriesController extends Controller
{


    /**
     * @var EntryRepository
     */
    private $repository;
    /**
     * @var EntryService
     */
    private $entryService;
    /**
     * @var ProtocolRepository
     */
    private $protocolRepository;


    public function __construct(ProjectRepository $projectRepository,
                                EntryRepository $repository,
                                EntryService $entryService,
                                ProtocolRepository $protocolRepository)

    {

        $this->projectRepository = $projectRepository;
        $this->repository = $repository;
        $this->entryService = $entryService;
        $this->protocolRepository = $protocolRepository;
    }


    public function index(Request $request,$id)
    {

        $project = $this->projectRepository->find($id);
        $protocol = $this->protocolRepository->find($project->protocol_id);
        $entries = $this->entryService->searchIndex($id);

            $search = $request->input('search');
                if(!empty($search)){
                    $entries = $this->entryService->search($search,$id);
                }
        return view('admin.entries.index', compact('entries','project','protocol'));

    }


    public function edit($id,$project_id)
    {
        $entry = $this->repository->findWhere(['user_id'=>$id, 'project_id'=>$project_id])->first();
        $project = $this->projectRepository->find($id);
        return view('admin.entries.edit', compact('entry','project'));
    }

    public function update(EntryUpdateRequest $request, $id)
    {
        $data = $request->all();
        $entry =  $this->repository->update($data, $id);
        return redirect()->route('admin.entries.index',['id'=>$entry->project_id]);
    }

    public function change($id,$project_id)
    {
        $entry =  $this->repository->find($id);
        $entry->project_id = $project_id;
        $entry->save();
        return redirect()->route('admin.layout.admin');
    }

}
