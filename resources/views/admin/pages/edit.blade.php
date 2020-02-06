@extends('adminlte::page')

@section('content_header')
    <h1>Editar página</h1>
    <hr>
@endsection

@section('content')

@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i>Erro</h5>
    Verifique os dados
  </div>
@endif

<div class="card card-primary">
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('painel.pages.update', $page)}}">
      @csrf
      @method('PUT')  
      <div class="card-body">
          
        <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{$page->title}}" placeholder="Digite o titulo da página">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
            @error('slug')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="body">Corpo:</label>
          <textarea name="body" class="form-control @error('body') is-invalid @enderror" placeholder="Digite o corpo" cols="30" rows="10">{{$page->body}}</textarea>
          @error('body')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
@endsection