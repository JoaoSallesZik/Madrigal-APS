@extends('Painel.Layout.index')
@section('content')

<section>
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Painel de Edição</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('Painel.Alunos.update', $aluno->id)}}">
                            @csrf
                            @method('PUT')

                           <div class="card-body">
                <div class="form-group">
                    <label for="nome">{{ __('Nome') }}</label>
                    <input type="text" class="form-control" id="nome" placeholder="Informe o nome do Aluno" name="nome" value="{{ $aluno->nome }}" required>
                  </div>
                     <div class="row"> 
                <div class="form-group col-md-3">
                    <label for="RA">{{ __('RA') }}</label>
                    <input type="text" class="form-control" id="RA" placeholder="Informe o RA" name="RA" value="{{ $aluno->RA }}" required>
                  </div>
                  <div class="form-group col-md-3">
                    <label for="CPF">{{ __('CPF') }}</label>
                    <input type="number" class="form-control" id="CPF" placeholder="Informe o CPF do Aluno" name="CPF" value="{{ $aluno->CPF }}" required>
                </div>
                 <div class="form-group col-md-3">
                    <label for="RG">{{ __('RG') }}</label>
                    <input type="number" class="form-control" id="RG" placeholder="Informe o RG do Aluno" name="RG" value="{{ $aluno->RG }}" required>
                </div>
                <div class="form-group col-md-3">
                    <label for="sexo">{{ __('Sexo') }}</label><br>
                    <select class="form-control select2"; name="sexo" value="{{ $aluno->sexo }}" required>
                        <option> Masculino  </option>
                        <option>  Feminino </option>
                    </select>
                </div>
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <label for="email">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" placeholder="Informe o email do Aluno" name="email" value="{{ $aluno->email }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="dataNasc">{{ __('Data de Nascimento') }}</label>
                    <input type="date" class="form-control" id="dataNasc" name="dataNasc" value="{{ $aluno->dataNasc }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="telefone">{{ __('Telefone') }}</label>
                    <input type="telefone" class="form-control" id="telefone" placeholder="(00) 0 0000-0000" name="telefone" value="{{ $aluno->telefone }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="CEP">{{ __('CEP') }}</label>
                    <input type="CEP" class="form-control" id="CEP" placeholder="Informe o CEP do Aluno" name="CEP" value="{{ $aluno->CEP }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="endereco">{{ __('Endereço') }}</label>
                    <input type="endereco" class="form-control" id="endereco" placeholder="Informe o endereço" name="endereco" value="{{ $aluno->endereco }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="bairro">{{ __('Bairro') }}</label>
                    <input type="bairro" class="form-control" id="bairro" placeholder="Informe o bairro" name="bairro" value="{{ $aluno->bairro }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="curso">{{ __('Curso') }}</label>
                    <input type="curso" class="form-control" id="curso" placeholder="Informe o curso do Aluno" name="curso" value="{{ $aluno->curso }}" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="periodo">{{ __('Período') }}</label>
                    <input type="periodo" class="form-control" id="periodo" placeholder="Informe o periodo do Aluno" name="periodo" value="{{ $aluno->periodo }}" required>
                </div>
                </div>
                   
                                <div class="card-footer " style="text-align: center;">
                                    <button type="submit" class="btn btn-primary">
                                        Editar
                                    </button>
                                    <button value="Voltar" class="btn btn-danger" onClick="window.history.back();">
                                        Cancelar
                                    </button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </section>
        @endsection
