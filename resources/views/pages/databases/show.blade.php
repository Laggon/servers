@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('databases.index') }}">Список баз данных</a></li>
        </ol>
    </nav>

    <h1>База данных {{ $database->name }}</h1>
    <div>
        <div>
            <a href="{{ route('databases.edit', $database) }}" class="btn btn-secondary">Изменить</a>
        </div>
        <form action="{{ route('databases.destroy', $database) }}" class="mt-2" method="POST">
            @method('delete')
            @csrf
            <input type="submit" class="btn btn-danger" value="Удалить">
        </form>
    </div>
    <div>
        <div>
            Сервер: <a href="{{ route('servers.show', $database->server) }}">{{ $database->server->name }}</a>
        </div>
    </div>
@endsection
