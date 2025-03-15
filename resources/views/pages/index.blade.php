@extends('layouts.app')

@section('content')
    <a href="{{ route('servers.index') }}" class="btn btn-primary">Сервера</a>
    <a href="{{ route('databases.index') }}" class="btn btn-primary">Базы данных</a>
@endsection
