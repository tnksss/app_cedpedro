@extends('layouts.app')
@section('header','Usuários')
@section('content')
<h3>Listagem de Usuários</h3>

    <ul>
        @foreach ($users as $user)
            <li>
                {{$user->name}} - {{$user->email}}
            </li>
            
        @endforeach
    </ul>

@endsection