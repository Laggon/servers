@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('databases.index') }}">Список баз данных</a></li>
            <li class="breadcrumb-item"><a href="{{ route('databases.show', $database) }}">{{ $database->name }}</a></li>
        </ol>
    </nav>

    <form action="{{ route('databases.update', $database) }}" method="POST">
        @method('put')
        @csrf
        <h1>Редактирование базы данных {{ $database->name }}</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Название',
            'value' => $database->name,
        ])

        @include('components.form.fields.select', [
            'name' => 'server_id',
            'label' => 'Сервер',
            'value' => $database->server_id,
            'options' => $servers,
        ])

        <div class="mt-2">
            <input type="submit" class="btn btn-success" value="Сохранить">
        </div>
    </form>
@endsection
