<?php

namespace App\Http\Controllers;

use App\Http\Requests\Database\DatabaseCreateRequest;
use App\Http\Requests\Database\DatabaseUpdateRequest;
use App\Models\Database;
use App\Models\Server;
use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    public function index()
    {
        $databases = Database::all();

        return view('pages.databases.index')->with([
            'databases' => $databases,
        ]);
    }

    public function show(Database $database)
    {
        return view('pages.databases.show')->with([
            'database' => $database,
        ]);
    }

    public function create()
    {
        $items = Server::all();

        $servers = [];

        foreach ($items as $database) {
            $servers[$database->id] = $database->name;
        }

        return view('pages.databases.create')->with([
            'servers' => $servers,
        ]);
    }

    public function store(DatabaseCreateRequest $request)
    {
        $data = $request->validated();

        $database = Database::create($data);

        return redirect(route('databases.show', $database));
    }

    public function edit(Database $database)
    {
        $items = Server::all();

        $servers = [];

        foreach ($items as $db) {
            $servers[$db->id] = $db->name;
        }

        return view('pages.databases.edit')->with([
            'database' => $database,
            'servers' => $servers,
        ]);
    }

    public function update(DatabaseUpdateRequest $request, Database $database)
    {
        $data = $request->validated();

        $database->fill($data);
        $database->saveOrFail();

        return redirect(route('databases.show', $database));
    }

    public function destroy(Database $database)
    {
        $database->deleteOrFail();

        return redirect(route('databases.index'));
    }
}
