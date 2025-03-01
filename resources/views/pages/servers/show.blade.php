@extends('layouts.app')

@section('content')
    <a href="{{ route('servers.index') }}">Список серверов</a>
    <h1>Сервер {{ $server->name }}</h1>
    <div>
        <a href="{{ route('servers.edit', $server) }}">Изменить</a>
        <form action="{{ route('servers.destroy', $server) }}" method="POST">
            @method('delete')
            @csrf
            <input type="submit" value="Удалить">
        </form>
    </div>
    <div>
        <div>IP: {{ $server->ip }}</div>
    </div>
@endsection
