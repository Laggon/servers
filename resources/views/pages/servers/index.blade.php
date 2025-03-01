@extends('layouts.app')

@section('content')
    <a href="{{ route('servers.create') }}">Добавить</a>
    <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Название</td>
                <td>IP</td>
            </tr>
        </thead>
        <tbody>
            @foreach($servers as $server)
                <tr>
                    <td>{{ $server->id }}</td>
                    <td>
                        <a href="{{ route('servers.show', $server) }}">{{ $server->name }}</a>
                    </td>
                    <td>{{ $server->ip }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
