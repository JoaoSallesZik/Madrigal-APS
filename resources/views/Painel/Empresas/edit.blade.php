@extends('Painel.Layout.index')
@section('content')

<section class="content">
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Edição de Empresa</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('Painel.Empresas.update', $empresa->id)}}">
               @csrf
               @method('PUT')
                <div class="card-body">
                <div class="form-group">
                    <label for="nomeEmpresa">{{ __('Nome da Empresa') }}</label>
                    <input type="text" class="form-control" id="nomeEmpresa" placeholder="Informe o nome da Empresa" name="nomeEmpresa" value="{{ $empresa->nomeEmpresa }}" required>
                  </div>
                     <div class="row"> 
                <div class="form-group col-md-3">
                    <label for="CNPJ">{{ __('CNPJ') }}</label>
                    <input type="text" maxlenght="14" class="form-control" id="CNPJ" placeholder="Informe o CNPJ" name="CNPJ" value="{{ $empresa->CNPJ }}" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="endereco">{{ __('Endereço') }}</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Informe o Endereço" name="endereco" value="{{ $empresa->endereco }}" required>
                </div>
                 <div class="form-group col-md-3">
                    <label for="telefone">{{ __('Telefone') }}</label>
                    <input type="number" maxlenght="11" minlenght="8" class="form-control" id="telefone" placeholder="Informe o telefone" name="telefone" value="{{ $empresa->telefone }}" required>
                </div>
                  <div class="form-group col-md-3">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" placeholder="Informe o email" name="email" value="{{ $empresa->email }}" required>
                </div>
                </div>
                
                
                <!-- /.card-body -->

                <div class="card-footer " style="text-align: center;">
                  <button type="submit" class="btn btn-primary">Editar</button>

                  <button value="Voltar" class="btn btn-danger" onClick="window.history.back();">
                                        Cancelar
                   </button>
                   </div>
                </div>
              </form>
            </div>

</section>
  @endsection
