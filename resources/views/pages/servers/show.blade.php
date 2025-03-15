@extends('layouts.app')

@section('content')
    <a href="{{ route('servers.index') }}">Список серверов</a>
    <h1>Сервер {{ $server->name }}</h1>
    <div>
        <div>
            <a href="{{ route('servers.edit', $server) }}" class="btn btn-secondary">Изменить</a>
        </div>
        <form action="{{ route('servers.destroy', $server) }}" class="mt-2" method="POST">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
    <div>
        <div>IP: {{ $server->ip }}</div>
    </div>
@endsection
