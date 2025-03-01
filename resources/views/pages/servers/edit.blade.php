@extends('layouts.app')

@section('content')
    <form action="{{ route('servers.update', $server) }}" method="POST">
        @method('put')
        @csrf
        <h1>Редактирование сервера {{ $server->name }}</h1>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div>
            <div>
                <label for="name">Название</label>
            </div>
            <div>
                <input id="name" name="name" value="{{ old('name') ?: $server->name }}" required>
            </div>
        </div>

        <div>
            <div>
                <label for="ip">IP</label>
            </div>
            <div>
                <input id="ip" name="ip" value="{{ $server->ip }}" disabled>
            </div>
        </div>

        <input type="submit" value="Сохранить">
    </form>
@endsection
