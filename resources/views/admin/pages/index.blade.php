@extends('adminlte::page')

@section('title', 'Páginas')

@section('content_header')
    <h1>Páginas</h1>
    <hr>
    <a class="btn btn-success"href="{{ route('painel.pages.create')}}"><i class="fa fa-plus"></i>  Nova página</a>
@endsection

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
        <table class="table table-hover">
            <thead>
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 60%;">Titulo</th>
                    <th style="width: 30%;">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                <tr>
                    <td style="vertical-align: middle;">{{$page->id}}</td>
                    <td style="vertical-align: middle;">{{$page->title}}</td>
                    <td style="vertical-align: middle;">
                        <div class="row" style="margin: 0;">
                            <a class="btn btn-success" href=""><i class="fa fa-eye"></i>  Ver</a>
                            <a class="btn btn-info" href="{{ route('painel.pages.edit', $page)}}" style="margin-left:10px;"><i class="fa fa-edit"></i>  Editar</a>
                            <form method="POST" action="{{ route('painel.pages.destroy', $page)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Deseja realmente excluir a página {{$page->title}} ?')" style="margin-left: 10px;"><i class="fa fa-user-times"></i>  Excluir</button>
                            </form>
                        </div>
                    </td>
                  </tr>
                @endforeach
            
            </tbody>
        </table>
    </div>
</div>
@endsection