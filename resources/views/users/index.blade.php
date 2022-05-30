@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
   <h1>
      Lista de Usuário |
      (<a href="{{ route('users.create') }}">+</a>)
   </h1>

   <ul>
      @foreach ($users as $user)
         <li>
            {{ $user->name }} - {{ $user->email }} 
            | <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
            | <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a>
         </li>
      @endforeach
   </ul>
@endsection