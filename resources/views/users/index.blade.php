@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
   <h1 >
      Lista de Usuário
      (<a href="{{ route('users.create') }}">+</a>)
   </h1>

   <form action="{{ route('users.index') }}" method="get">
      <input type="text" name="search" placeholder="pesquisar">
      <button>Pesquisar</button>
   </form>

   <table>
      <thead>
         <th>Name</th>
         <th>Email</th>
         <th>Ações</th>
      </thead>
      <tbody>
         @foreach ($users as $user)
         <tr>
            <td>
               {{ $user->name }}
            </td>
            <td>
               {{ $user->email }}
            </td>
            <td>
               <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
               <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a>
            </td>
         </tr>
      @endforeach
      </tbody>
   </table>
   {{-- <ul>
      @foreach ($users as $user)
         <li>
            {{ $user->name }} - {{ $user->email }} 
            | <a href="{{ route('users.edit', ['id' => $user->id]) }}">Editar</a>
            | <a href="{{ route('users.show', ['id' => $user->id]) }}">Detalhes</a>
         </li>
      @endforeach
   </ul> --}}
@endsection