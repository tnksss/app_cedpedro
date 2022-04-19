@extends('layouts.app')
@section('title','Listagem de Pastas')
@section('content')
<table class="table">
    <thead>
        <th>CGM</th>
        <th>Nome</th>
        <th>Data de Nascimento</th>
        <th>Etiqueta</th>
    </thead>
    <tbody>
        @foreach ($folders as $folder)
        <tr>
            <th>{{$folder->cgm}}</th>
            <th>{{$folder->name}}</th>
            <th>{{$folder->birth_date}}</th>
            <th>{{$folder->label}}</th>
        </tr>
        @endforeach
    </tbody>
</table>



    

@endsection