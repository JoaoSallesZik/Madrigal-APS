@extends('Painel.Layout.index')



<section class="content">
@section('content')
      <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Alunos | Add      
                <a href="{{route('Painel.Alunos.create')}}" class="btn btn-Success">
                  <i class="fa fa-plus-square nav-icon"></i>
                </a></h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>RA</th>
                      <th>Nome</th>
                      <th>Curso</th>
                      <th>Periodo</th>
                      <th>CPF</th>
                      <th>Endereço</th>
                      <th>Data de Criação</th>
                      <th>Email</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($alunos as $aluno)
                    <tr>
                      <td>{{$aluno->RA}}</td>
                      <td>{{$aluno->nome}}</td>
                      <td>{{$aluno->curso}}</td>
                      <td>{{$aluno->periodo}}</td>
                      <td>{{$aluno->CPF}}</td>
                      <td>{{$aluno->endereco}}</td>
                      <td>{{$aluno->created_at->diffForHumans()}}</td>
                      <td>{{$aluno->email}}</td>
                      <td>
                        <a href="{{route('Painel.Alunos.edit', $aluno->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{ route('Painel.Alunos.destroy', $aluno->id) }}">  <br>
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
