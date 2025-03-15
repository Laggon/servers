@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Список баз данных</li>
        </ol>
    </nav>

    <a href="{{ route('databases.create') }}" class="btn btn-success">Добавить</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Название</th>
                <th scope="col">Сервер</th>
            </tr>
        </thead>
        <tbody>
            @foreach($databases as $database)
                <tr>
                    <td>{{ $database->id }}</td>
                    <td>
                        <a href="{{ route('databases.show', $database) }}" class="btn btn-sm btn-primary">
                            {{ $database->name }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('servers.show', $database->server->id) }}" class="btn btn-sm btn-primary">
                            {{ $database->server->name }}
                        </a>
                    </td>
                    <td>{{ $database->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
