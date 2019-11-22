@extends('Painel.Layout.index')



<section class="content">
@section('content')
      <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estágios | Add 
                <a href="{{route('Painel.Estagios.create')}}" class="btn btn-Success">
                  <i class="fa fa-plus-square nav-icon"></i>
                </a></h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>ID do Aluno</th>
                      <th>ID da Empresa</th>
                      <th>Carga Horária</th>
                      <th>Data de Ínicio</th>
                      <th>Data de Término</th>
                      <th>Hora de Entrada </th>
                      <th>Hora de Saída</th>
                      <th>Horas Realizadas</th>
                      <th>Data de criação</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($estagios as $estagio)
                    <tr>
                      <td>{{$estagio->id}}</td>
                      <td>{{$estagio->id_aluno}}</td>
                      <td>{{$estagio->id_empresa}}</td>
                      <td>{{$estagio->cargaHoraria}}</td>
                      <td>{{$estagio->dataInicio}}</td>
                      <td>{{$estagio->dataTermino}}</td>
                       <td>{{$estagio->horaEntrada}}</td>
                        <td>{{$estagio->horaSaida}}</td>
                         <td>{{$estagio->horasRealizadas}}</td>
                      <td>{{$estagio->created_at->diffForHumans()}}</td>
                      <td>
                        <a href="{{route('Painel.Estagios.edit', $estagio->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{ route('Painel.Estagios.destroy', $estagio->id) }}">  <br>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger"><i class="material-icons"></i>Excluir</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

</section>
  @endsection
