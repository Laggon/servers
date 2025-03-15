@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Список серверов</li>
        </ol>
    </nav>

    <a href="{{ route('servers.create') }}" class="btn btn-success">Добавить</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Название</th>
                <th scope="col">IP</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servers as $server)
                <tr>
                    <td>{{ $server->id }}</td>
                    <td>
                        <a href="{{ route('servers.show', $server) }}" class="btn btn-sm btn-primary">{{ $server->name }}</a>
                    </td>
                    <td>{{ $server->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
