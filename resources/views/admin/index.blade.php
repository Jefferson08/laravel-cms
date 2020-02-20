@extends('adminlte::page')

@section('title', 'Dashboard')

@section('plugins.Chartjs', true)

@section('content_header')
    
<div class="container">

    <div class="row">

        <div class="col-md-4">
            <form action="">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text bg-info"><i class="fas fa-clock"></i></span>
                    </div>
                    <select name="date_interval" class="form-control" onchange="this.form.submit()">
                        <option value="30" {{$date_interval==30 ? 'selected="selected"' : ''}}>Últimos 30 dias</option>
                        <option value="60" {{$date_interval==60 ? 'selected="selected"' : ''}}>Últimos 2 meses</option>
                        <option value="90" {{$date_interval==90 ? 'selected="selected"' : ''}}>Últimos 3 meses</option>
                        <option value="180" {{$date_interval==180 ? 'selected="selected"' : ''}}>Últimos 6 meses</option>
                    </select>
                </div>
            </form>
        </div>

        
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$visitors_count}}</h3>
    
                  <p>Total de acessos</p>
                </div>
                <div class="icon">
                  <i class="fa fa-eye"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-success">
                <div class="inner">
                  <h3>{{$online_count}}</h3>
    
                  <p>Usuários online</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{$pages_count}}</h3>
    
                  <p>Páginas</p>
                </div>
                <div class="icon">
                  <i class="fa fa-file"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-danger">
                <div class="inner">
                  <h3>{{$users_count}}</h3>
    
                  <p>Usuários</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                </div>

                <div class="card-body">
                    <canvas id="pagePie"></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Páginas mais visitadas</h3>
                </div>

                <div class="card-body">
                    teste
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    window.onload = function(){
        var ctx = document.getElementById('pagePie').getContext('2d');

        var pagePieData = {
            labels: {!! $pagePieLabels !!},
            datasets: [
                {
                data: {!! $pagePieValues !!},
                backgroundColor : {!! $pagePieColors !!}
                }
            ]
        }
        
        var pagePie = new Chart(ctx, {
            type: 'pie',
            data: pagePieData
        });
    }
</script>

@endsection