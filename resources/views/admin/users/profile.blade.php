@extends('adminlte::page')

@section('title', 'Meu perfil')

@section('content_header')
    <h1>Editar Perfil</h1>
    <hr>
@endsection

@section('css')
<link rel="shortcut icon" href="{{ asset('assets/img/Fevicon.png') }}" />
@stop

<meta name="csrf-token" content="{{ csrf_token() }}">

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
    Verifique os dados
  </div>
@endif

<div class="card card-primary">

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('painel.profile.save', $user)}}">
      @csrf
      @method('PUT')  
      <div class="card-body">
          
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$user->name}}" placeholder="Digite o nome">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$user->email}}" placeholder="Digite a senha email">
          @error('email')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        
        <div class="form-group">
          <div class="row">
            <div class="col-sm-4">
              <label for="profile_photo">Foto de perfil:</label>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4">
              <img src="{{url('/media/images/profile')."/".$user->profile_photo}}" id="profile_thumb" style="max-width: 120; max-height: 120">
            </div>
          </div>
          <div class="custom-file mt-3 mb-3">
            <input type="file" class="custom-file-input" id="profile_photo" onchange="uploadProfile({{$user->id}}, this.files[0])">
            <label class="custom-file-label selected" for="profile_photo"></label>
          </div>
        </div>
        <div class="form-group">
          <label for="about">Sobre mim:</label>
          <textarea name="about" cols="20" rows="5" maxlength="255" class="form-control @error('about') is-invalid @enderror" placeholder="Escreva sobre você">{{ $user->about}}</textarea>
          @error('about')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="password">Senha:</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{old('password')}}" placeholder="Senha">
          @error('password')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="password_confirmation">Senha novamente:</label>
          <input type="password" class="form-control" name="password_confirmation" placeholder="Confirme a senha">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Salvar</button>
      </div>
    </form>
  </div>

  @section('js')
    <script src="{{asset('assets/js/ajax.js')}}"></script>
  @stop
@endsection