<?php

namespace acessoSystem\Http\Controllers\Client;

use acessoSystem\Entities\Entry;
use acessoSystem\Http\Controllers\Controller;
use acessoSystem\Http\Requests;
use acessoSystem\Repositories\EntryRepository;
use acessoSystem\Http\Requests\EntryUpdateRequest;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Http\Requests\EntryRequest;


class EntriesController extends Controller
{




    /**
     * @var ClientService
     */
    private $clientService;
    /**
     * @var EntryRepository
     */
    private $entryRepository;

    public function __construct(ProjectRepository $projectRepository, EntryRepository $entryRepository
                               )

    {

        $this->projectRepository = $projectRepository;
        $this->entryRepository = $entryRepository;
    }


    public function create($id)
    {
        $project = $this->projectRepository->find($id);
        $active = $this->entryRepository->findWhere(['user_id'=>auth()->user()->id, 'project_id'=>$id]);
        if(count($active) > 0):
            return redirect()->route('client.entries.edit',['id'=>$project->id]);
        endif;
        return view('client.entries.create',compact('Project'));

    }

    public function store(EntryRequest $request)
    {
        $data = $request->all();
        $entry = $this->entryRepository->create($data);
        return redirect()->route('client.entries.dispatch',['id'=>$entry->id]);
    }



    public function edit($id)
    {
        $entry = $this->entryRepository->findWhere(['user_id'=>auth()->user()->id, 'project_id'=>$id])->first();
        $project = $this->projectRepository->find($id);
        return view('client.entries.edit', compact('entry','project'));
    }



    public function update(EntryUpdateRequest $request, $id)
    {
        $data = $request->all();
        $entry =  $this->entryRepository->update($data, $id);
        return redirect()->route('client.entries.dispatch',['id'=>$entry->id]);
    }

    public function dispatch($id)
    {
        $entry = $this->entryRepository->find($id);
        return view('client.entries.dispatch',compact('entry'));
    }

}
