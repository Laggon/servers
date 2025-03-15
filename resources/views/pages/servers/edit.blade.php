@extends('layouts.app')

@section('content')
    <form action="{{ route('servers.update', $server) }}" method="POST">
        @method('put')
        @csrf
        <h1>Редактирование сервера {{ $server->name }}</h1>

        @include('components.form.errors')

        @include('components.form.fields.input', [
            'name' => 'name',
            'label' => 'Название',
            'value' => $server->name,
        ])

        @include('components.form.fields.input', [
            'name' => 'ip',
            'label' => 'IP',
            'value' => $server->ip,
            'disabled' => true,
        ])

        <div class="mt-2">
            <input type="submit" class="btn btn-success" value="Сохранить">
        </div>
    </form>
@endsection
