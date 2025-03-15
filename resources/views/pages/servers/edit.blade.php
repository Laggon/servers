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

        <div class="form-group">
            <label for="name">Название</label>
            <input class="form-control" id="name" name="name" value="{{ old('name') ?: $server->name }}" required>
        </div>

        <div class="form-group">
            <label for="ip">IP</label>
            <input class="form-control" id="ip" name="ip" value="{{ old('ip') }}" disabled>
        </div>

        <div class="mt-2">
            <input type="submit" class="btn btn-success" value="Сохранить">
        </div>
    </form>
@endsection
