@extends('adminlte::page')

@section('content_header')
    <h1>Adicionar Usuário</h1>
    <hr>
@endsection

@section('content')

<div class="card card-primary">

    @if ($errors->any())
    <ul>
    @foreach ($errors as $error)
         <li>$error</li>
    @endforeach
    </ul>
@endif

    

    <!-- form start -->
    <form role="form" method="POST" action="{{ route('painel.users.store')}}">
      @csrf  
      <div class="card-body">
          
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" placeholder="Digite o nome">
            @error('name')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email')}}" placeholder="Digite a senha email">
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
@endsection