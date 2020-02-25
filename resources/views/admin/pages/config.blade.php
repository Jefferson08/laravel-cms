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
            <label for="title">Título:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $settings['title']}}" placeholder="Digite o título">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="subtitle">Sub-Título:</label>
            <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{ $settings['subtitle']}}" placeholder="Digite o sub-título">
            @error('subtitle')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="description">Descrição:</label>
          <textarea name="description" cols="20" rows="5" maxlength="600" class="form-control @error('description') is-invalid @enderror" placeholder="Digite descrição do site">{{ $settings['description']}}</textarea>
          @error('description')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="address">Endereço:</label>
          <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $settings['address']}}" placeholder="Digite o endereço">
          @error('address')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="phone">Telefone:</label>
          <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $settings['phone']}}" placeholder="Digite o telefone para contato">
          @error('phone')
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
                    <label for="name">Background color:</label>
                    <input type="color" class="form-control @error('bg_color') is-invalid @enderror" name="bg_color" value="{{ $settings['bg_color']}}" style="width: 120px;">
                    @error('bg_color')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
            </div>
            
           <div class="col-sm-2">
            <div class="form-group">
                <label for="name">Header color:</label>
                <input type="color" class="form-control @error('header_color') is-invalid @enderror" name="header_color" value="{{ $settings['header_color']}}" style="width: 100px;">
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