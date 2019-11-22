@extends('Painel.Layout.index')



<section class="content">
@section('content')
      <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Empresas | Add     
                <a href="{{route('Painel.Empresas.create')}}" class="btn btn-Success">
                  <i class="fa fa-plus-square nav-icon"></i>
                </a></h3>

              
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome da Empresa</th>
                      <th>CNPJ</th>
                      <th>Endereço</th>
                      <th>Telefone</th>
                      <th>Email</th>
                      <th>Data de Criação </th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($empresas as $empresa)
                    <tr>
                      <td>{{$empresa->id}}</td>
                      <td>{{$empresa->nomeEmpresa}}</td>
                      <td>{{$empresa->CNPJ}}</td>
                      <td>{{$empresa->endereco}}</td>
                      <td>{{$empresa->telefone}}</td>
                      <td>{{$empresa->email}}</td>
                      <td>{{$empresa->created_at->diffForHumans()}}</td>
                      <td>
                        <a href="{{route('Painel.Empresas.edit', $empresa->id)}}" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <form method="POST" action="{{ route('Painel.Empresas.destroy', $empresa->id) }}">  <br>
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
