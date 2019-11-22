@extends('Painel.Layout.index')

@section('content')

<section class="content">

      
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
              @inject('usuarios', 'App\User')
                <h3>{{$usuarios->count() }}</h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{route('Painel.Usuarios.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>

          </section>
  @endsection
