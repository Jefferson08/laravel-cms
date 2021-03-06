@extends('adminlte::page')

@section('title', 'Editar usuário')

@section('content_header')
    <h1>Editar Usuário - {{$user->name}}</h1>
    <hr>
@endsection

@section('css')
<link rel="shortcut icon" href="{{ asset('assets/img/Fevicon.png') }}" />
@stop

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
    <form role="form" method="POST" action="{{ route('painel.users.update', $user)}}">
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

  <script src="{{asset('assets/js/ajax.js')}}"></script>
@endsection