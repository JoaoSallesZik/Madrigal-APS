@extends('Painel.Layout.index')



<section class="content">
@section('content')
      <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Usuários do Sistema 
              

                </h3>

                <div class="card-tools">
                 
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Data de Criação</th>
                      <th>Email</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($usuarios as $usuario)
                    <tr>
                      <td>{{$usuario->id}}</td>
                      <td>{{$usuario->name}}</td>
                      <td>{{$usuario->created_at->diffForHumans() }}</td>
                      <td>{{$usuario->email}}</td>
                      <td>
                        <form method="POST" action="{{ route('Painel.Usuarios.destroy', $usuario->id) }}">  <br>
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
