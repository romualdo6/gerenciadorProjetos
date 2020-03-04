<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ClientRepository;
use App\Services\ClientService;

class ClientController extends Controller
{
    private $repository;

    private $service;


    public function __construct(ClientRepository $repository, ClientService $service)
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
        return $this->repository->find($id);
    }

    public function destroy($id)
    {

        $client = $this->repository->where('id', $id)->first();

        if ($client != null) {
            $client->delete();
            return ['message' => 'Successfully deleted!!'];
        }

        return ['message' => 'Wrong ID!!'];
    }
}
