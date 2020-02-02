@extends('adminlte::page')

@section('content_header')
    <h1>Usuários</h1>
    <hr>
    <a class="btn btn-success"href="{{ route('painel.users.create')}}"><i class="fa fa-plus"></i>  Adicionar Usuário</a>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-hover">
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