@extends('layouts.app')

@section('title', 'Info User')

@section('content')
   <h1>Info do Usuário - {{ $user->name }}</h1>

   <ul>
      <li>
         {{ $user->name }} - {{ $user->email }}
      </li>
   </ul>
   <a href="{{ route('users.index') }}">voltar</a>
@endsection
