<?php

namespace acessoSystem\Http\Controllers;

use acessoSystem\Repositories\AppealRepository;
use acessoSystem\Repositories\ProjectRepository;
use acessoSystem\Repositories\ProtocolRepository;
use acessoSystem\Entities\Appeal;
use acessoSystem\Http\Requests;
use acessoSystem\Services\AppealService;
use Illuminate\Http\Request;
use acessoSystem\Http\Requests\AppealRequest;


class AppealsController extends Controller
{

    /**
     * @var AppealRepository
     */
    private $repository;
    /**
     * @var AppealService
     */
    private $appealService;
    /**
     * @var ProjectRepository
     */
    private $projectRepository;


    public function __construct(
                                ProjectRepository $projectRepository,
                                AppealRepository $repository,
                                AppealService $appealService)

    {


        $this->repository = $repository;
        $this->appealService = $appealService;
        $this->projectRepository = $projectRepository;
    }


    public function index($id,Request $request)
    {

        $appeals = Appeal::where('project_id', '=', $id)->paginate(5);


        $name = $request->input('name');
        $email = $request->input('email');
        if (!empty($name)) {
            $appeals = Appeal::where('users.name', 'LIKE', '%' . $name . '%')
                                ->where('project_id', '=', $id)
                                ->join('users', 'users.id', '=', 'appeals.user_id')
                                ->paginate(5);
        }
        if (!empty($email)) {

            $appeals = Appeal::where('users.email', 'LIKE', '%' . $email . '%')
                                ->where('project_id', '=', $id)
                                ->join('users', 'users.id', '=', 'appeals.user_id')
                                ->paginate(5);
        }

        $project =$id;
        return view('admin.appeals.index', compact('appeals','project'));

    }

    public function open($id, Request $request)
    {

        $appeals = $contacts = Appeal::where('status', '=', 0)->where('project_id', '=', $id)->paginate(5);

        $name = $request->input('name');
        $email = $request->input('email');



        if (!empty($name)) {
            $appeals = Appeal::where('users.name', 'LIKE', '%' . $name . '%')
                                ->where('project_id', '=', $id)
                                ->where('status', '=', 0)
                                ->join('users', 'users.id', '=', 'appeals.user_id')
                                ->paginate(5);
        }
        if (!empty($email)) {

            $appeals = Appeal::where('users.email', 'LIKE', '%' . $email . '%')
                                ->where('project_id', '=', $id)
                                ->where('status', '=', 0)
                                ->join('users', 'users.id', '=', 'appeals.user_id')
                                ->paginate(5);
        }


        $project =$id;
        return view('admin.appeals.open', compact('appeals','project'));

    }

    public function update(Request $request, $id)
    {

        $data = $request->all();
        $data['status'] = 1;
        $create = $this->repository->update($data, $id);

        $project = $create['project_id'];
        return redirect()->route('admin.appeals.open',$project);
    }


    //client not auth


    public function create()
    {

        $projetos = $this->projectRepository->lists();
        return view('admin.contacts.create', compact('projetos'));

    }

    public function store(AppealRequest $request)
    {

        $this->appealService->store($request);

        return redirect()->route('contacts.create');
    }
}
