@extends('layouts.app')

@section('content')
    <form action="{{ route('servers.store') }}" method="POST">
        @csrf
        <h1>Добавление нового сервера</h1>

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
                <input id="name" name="name" value="{{ old('name') }}" required>
            </div>
        </div>

        <div>
            <div>
                <label for="ip">IP</label>
            </div>
            <div>
                <input id="ip" name="ip" value="{{ old('ip') }}" required>
            </div>
        </div>

        <input type="submit" value="Добавить">
    </form>
@endsection
