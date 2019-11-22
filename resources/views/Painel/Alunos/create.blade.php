@extends('Painel.Layout.index')
@section('content')

<section class="content">
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Aluno</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" enctype="multipart/form-data" action="{{ route('Painel.Alunos.store') }}">
               @csrf

                <div class="card-body">
                <div class="form-group">
                    <label for="nome">{{ __('Nome') }}</label>
                    <input type="text" class="form-control" id="nome" placeholder="Informe o nome do Aluno" name="nome" value="{{ old('nome') }}" required>
                  </div>
                     <div class="row"> 
                <div class="form-group col-md-3">
                    <label for="RA">{{ __('RA') }}</label>
                    <input type="text" maxlenght="10" class="form-control" id="RA" placeholder="Informe o RA" name="RA" value="{{ old('RA') }}" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="CPF">{{ __('CPF') }}</label>
                    <input type="number" maxlenght="11" class="form-control" id="CPF" placeholder="Informe o CPF do Aluno" name="CPF" value="{{ old('CPF') }}" required>
                </div>
                 <div class="form-group col-md-3">
                    <label for="RG">{{ __('RG') }}</label>
                    <input type="number" maxlenght="10" class="form-control" id="RG" placeholder="Informe o RG do Aluno" name="RG" value="{{ old('RG') }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="sexo">{{ __('Sexo') }}</label><br>
                    <select class="form-control select2"; name="sexo" value="{{ old('sexo') }}" required>
                        <option> Masculino  </option>
                        <option>  Feminino </option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" placeholder="Informe o email do Aluno" name="email" value="{{ old('email') }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="dataNasc">{{ __('Data de Nascimento') }}</label>
                    <input type="date" class="form-control" id="dataNasc" name="dataNasc" values="{{ old('dataNasc') }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="telefone">{{ __('Telefone') }}</label>
                    <input minlength="1" maxlength="9" type="number" class="form-control" id="telefone" placeholder="(00) 0 0000-0000" name="telefone" values="{{ old('telefone') }}" require>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-3">
                    <label for="CEP">{{ __('CEP') }}</label>
                    <input type="number" maxlenght="8" class="form-control" id="CEP" placeholder="00000-000" name="CEP" values="{{ old('CEP') }}" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="endereco">{{ __('Endereço') }}</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Ex: Rua Tchunusbango Tchurusbago 1337" name="endereco" values="{{ old('endereco') }}" require>
                </div>
                <div class="form-group col-md-3">
                    <label for="bairro">{{ __('Bairro') }}</label>
                    <input type="text" class="form-control" id="bairro" placeholder="Informe o Bairro" name="bairro" values="{{ old('bairro') }}" require>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="curso">{{ __('Curso') }}</label>
                    <input type="text" class="form-control" id="curso" placeholder="Informe o curso do Aluno" name="curso" values="{{ old('curso') }}" require>
                </div>
                <div class="form-group col-md-6">
                    <label for="periodo">{{ __('Periodo') }}</label>
                    <input type="number" class="form-control" id="periodo" placeholder="Informe o periodo do curso" name="periodo" values="{{ old('periodo') }}" require>
                </div>
                </div>
                
                <!-- /.card-body -->

                <div class="card-footer " style="text-align: center;">
                  <button type="submit" class="btn btn-primary">Salvar</button>

                  <button value="Voltar" class="btn btn-danger" onClick="window.history.back();">
                                        Cancelar
                   </button>
                </div>
              </form>
            </div>

</section>
  @endsection
