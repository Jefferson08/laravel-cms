@extends('adminlte::page')

@section('title', 'Configurações')

@section('content_header')
    <h1>Configurações gerais do site</h1>
    <hr>
@endsection

@section('content')

@if (session('success'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-check"></i>Ok</h5>
    {{session('success')}}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h5><i class="icon fas fa-ban"></i>Erro</h5>
  </div>
@endif

<div class="card card-primary">

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('painel.settings.update')}}">
      @csrf
      @method('PUT')  
      <div class="card-body">
          
        <div class="form-group">
            <label for="name">Título:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $settings['title']}}" placeholder="Digite o título">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Sub-Título:</label>
            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{ $settings['subtitle']}}" placeholder="Digite o sub-título">
            @error('subtitle')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">Email para contato:</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $settings['email']}}" placeholder="Digite um email para contato">
          @error('email')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="name">Cor de fundo:</label>
                    <input type="color" class="form-control @error('bg_color') is-invalid @enderror" name="bg_color" value="{{ $settings['bg_color']}}" style="width: 100px;">
                    @error('bg_color')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
           <div class="col-sm-2">
            <div class="form-group">
                <label for="name">Cor do texto:</label>
                <input type="color" class="form-control @error('text_color') is-invalid @enderror" name="text_color" value="{{ $settings['text_color']}}" style="width: 100px;">
                @error('text_color')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
           </div>
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>
@endsection