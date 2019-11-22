@extends('Painel.Layout.index')

@section('content')

<section class="content">

      
        <div class="row">
          <div class="col col-3">
            <div class="small-box bg-info">
              <div class="inner">
              @inject('usuarios', 'App\User')
                <h3>{{$usuarios->count() }}</h3>

                <p>Usuarios</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="{{route('Painel.Usuarios.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>



            <div class="col col-3">
             <div class="small-box bg-maroon">
              <div class="inner">
              @inject('alunos', 'App\Aluno')
                <h3>{{$alunos->count() }}</h3>

                <p>Alunos</p>
              </div>
              <div class="icon">
                <i class="fas fa-address-card"></i> 
              </div>
              <a href="{{route('Painel.Alunos.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
             </div>
            </div>


            <div class="col col-3">
            <div class="small-box  bg-lime">
              <div class="inner">
              @inject('empresas', 'App\Empresa')
                <h3>{{$empresas->count() }}</h3>

                <p>Empresas</p>
              </div>
              <div class="icon">
                <i class="fas fa-store"></i>
              </div>
              <a href="{{route('Painel.Empresas.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>

            <div class="col col-3">
            <div class="small-box bg-warning">
              <div class="inner">
              @inject('estagios', 'App\Estagio')
                <h3>{{$estagios->count() }}</h3>

                <p>Estagios</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-graduate"></i>
              </div>
              <a href="{{route('Painel.Estagios.index')}}" class="small-box-footer">Administrar <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            </div>











            </div>


  @endsection
