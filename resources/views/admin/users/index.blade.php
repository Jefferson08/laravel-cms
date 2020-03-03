@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Usuários</h1>
    <hr>
    <a class="btn btn-success"href="{{ route('painel.users.create')}}"><i class="fa fa-plus"></i>  Adicionar Usuário</a>
@endsection

@section('css')
<link rel="shortcut icon" href="{{ asset('assets/img/Fevicon.png') }}" />

<style>
    .table td .row{
        flex-wrap: nowrap;
    }
</style>
@stop

@section('content')

@if (session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i>Ok</h5>
    {{session('success')}}
</div>
@endif

<div class="card">
    <div class="card-body">
        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th style="width: 20px">ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td style="vertical-align: middle;">{{$user->id}}</td>
                    <td style="vertical-align: middle;">{{$user->name}}</td>
                    <td style="vertical-align: middle;">{{$user->email}}</td>
                    <td style="vertical-align: middle;">
                        <div class="row" style="margin: 0;">
                            <a class="btn btn-info" href="{{ route('painel.users.edit', $user)}}"><i class="fa fa-edit"></i>  Editar</a>
                            @if ($user != Auth::user())
                            <form method="POST" action="{{ route('painel.users.destroy', $user)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Deseja realmente excluir o usuário {{$user->name}} ?')" style="margin-left: 10px;"><i class="fa fa-user-times"></i>  Excluir</button>
                            </form>
                            @endif
                        </div>
                    </td>
                  </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>
@endsection