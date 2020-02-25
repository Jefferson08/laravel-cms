@extends('adminlte::page')

@section('title', 'Nova página')

@section('content_header')
    <h1>Criar nova página</h1>
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
    <form role="form" method="POST" action="{{ route('painel.pages.store')}}">
      @csrf  
      <div class="card-body">
          
        <div class="form-group">
            <label for="title">Titulo:</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"  value="{{old('title')}}" placeholder="Digite o titulo da página">
            @error('title')
            <p class="text-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
          <label for="description">Descrição:</label>
          <input type="text" name="description" maxlength="255" class="form-control @error('description') is-invalid @enderror"  value="{{old('description')}}" placeholder="Digite a descrição da página">
          @error('description')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="body">Corpo:</label>
          <textarea name="body" class="form-control bodyfield @error('body') is-invalid @enderror" value="{{old('body')}}" placeholder="Digite o corpo" cols="30" rows="10"></textarea>
          @error('body')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Criar</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector:'textarea.bodyfield',
      height:300,
      menubar:false,
      plugins:['link', 'table', 'image', 'autoresize', 'lists'],
      toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | table | link image | bullist numlist',
      content_css:[
        '{{asset('assets/css/content.css')}}'
      ],
      images_upload_url:'{{route('image_upload')}}',
      images_upload_credentials:true,
      convert_urls: false
    });
  </script>
@endsection