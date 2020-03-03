@extends('adminlte::page')

@section('title', 'Editar página')

@section('content_header')
    <h1>Editar página</h1>
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
          <label for="description">Descrição:</label>
          <textarea name="description" cols="20" rows="5" maxlength="255" class="form-control @error('description') is-invalid @enderror" placeholder="Digite a descrição da página">{{$page->description}}</textarea>
          @error('description')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="form-group">
          <label for="body">Corpo:</label>
          <textarea name="body" class="form-control bodyfield @error('body') is-invalid @enderror" placeholder="Digite o corpo" cols="30" rows="10">{{$page->body}}</textarea>
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
      convert_urls: false,
      images_upload_handler: function (blobInfo, success, failure) {
           var xhr, formData;
           xhr = new XMLHttpRequest();
           xhr.withCredentials = false;
           xhr.open('POST', '/api/upload');
           var token = '{{ csrf_token() }}';
           xhr.setRequestHeader("X-CSRF-Token", token);
           xhr.onload = function() {
               var json;
               if (xhr.status != 200) {
                   failure('HTTP Error: ' + xhr.status);
                   return;
               }
               json = JSON.parse(xhr.responseText);

               if (!json || typeof json.location != 'string') {
                   failure('Invalid JSON: ' + xhr.responseText);
                   return;
               }
               success(json.location);
           };
           formData = new FormData();
           formData.append('file', blobInfo.blob(), blobInfo.filename());
           xhr.send(formData);
       }
    });
  </script>
@endsection