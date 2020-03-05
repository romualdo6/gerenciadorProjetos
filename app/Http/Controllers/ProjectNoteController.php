<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProjectNoteRepository;
use App\Services\ProjectNoteService;

class ProjectNoteController extends Controller
{
    private $repository;

    private $service;


    public function __construct(ProjectNoteRepository $repository, ProjectNoteService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function index($id)
    {
        return $this->repository->findWhere(['project_id' => $id]);
    }

    public function store(Request $request)
    {
        return $this->service->create($request->all());
    }

    public function update(Request $request, $noteId)
    {
        return $this->service->update($request->all(), $noteId);
    }

    public function show($id, $noteId)
    {
        return $this->repository->findWhere(['project_id' => $id, 'id' => $noteId]);
    }

    public function destroy($id)
    {

        $ProjectNote = $this->repository->where('id', $id)->first();

        if ($ProjectNote != null) {
            $ProjectNote->delete();
            return ['message' => 'Successfully deleted!!'];
        }

        return ['message' => 'Wrong ID!!'];
    }
}
