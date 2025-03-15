@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('databases.index') }}">Список баз данных</a></li>
        </ol>
    </nav>

    <form action="{{ route('databases.store') }}" method="POST">
        @csrf
        <h1>Добавление новой базы данных</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Название',
            'value' => '',
        ])

        @include('components.form.fields.select', [
            'name' => 'server_id',
            'label' => 'Сервер',
            'value' => '',
            'options' => $servers,
        ])

        <div class="mt-2">
            <input type="submit" class="btn btn-success" value="Добавить">
        </div>
    </form>
@endsection
