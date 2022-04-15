@extends('layouts.app')
@section('header','Criar novo usuário')
@section('content')


@include('users._form')

<button class="btn btn-primary btn-user btn-block">
    Criar novo usuário
</button>
</form>

@endsection