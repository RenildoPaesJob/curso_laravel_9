@extends('layouts.app')

@section('title', 'Info User')

@section('content')
    <h1>Info do Usuário - {{ $user->name }}</h1>

    <ul>
        <li>
            {{ $user->name }} - {{ $user->email }}
        </li>
    </ul>
    <form action="{{ route('users.destroy', $user->id) }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit">Excluir</button>
        <a href="{{ route('users.index') }}">voltar</a>
    </form>
@endsection
