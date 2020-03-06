<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectRepository;
use App\Services\ProjectService;

class ProjectController extends Controller
{
    private $repository;

    private $service;


    public function __construct(ProjectRepository $repository, ProjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index()
    {
        return $this->repository->all();
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request->all(), $id);
    }

    public function show($id)
    {
        if($this->repository->isOwner($id, )) {

        }
        return $this->repository->find($id);
    }

    public function destroy($id)
    {

        $Project = $this->repository->where('id', $id)->first();

        if ($Project != null) {
            $Project->delete();
            return ['message' => 'Successfully deleted!!'];
        }

        return ['message' => 'Wrong ID!!'];
    }
}
