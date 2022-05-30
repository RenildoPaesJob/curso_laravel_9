@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
   <h1>
      Lista de Usuário |
      (<a href="{{ route('users.create') }}">+</a>)
   </h1>

   <form action="{{ route('users.index') }}" method="get">
      <input type="text" name="search" placeholder="pesquisar">
      <button>Pesquisar</button>
   </form>
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