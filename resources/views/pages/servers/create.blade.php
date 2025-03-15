@extends('layouts.app')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('servers.index') }}">Список серверов</a></li>
        </ol>
    </nav>

    <form action="{{ route('servers.store') }}" method="POST">
        @csrf
        <h1>Добавление нового сервера</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Название',
            'value' => '',
        ])

        @include('components.form.fields.input', [
            'name' => 'ip',
            'label' => 'IP',
            'value' => '',
        ])

        <div class="mt-2">
            <input type="submit" class="btn btn-success" value="Добавить">
        </div>
    </form>
@endsection
