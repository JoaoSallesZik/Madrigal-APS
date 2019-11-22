@extends('Painel.Layout.index')
@section('content')

<section class="content">
    <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Cadastro de Estágio</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{ route('Painel.Estagios.store') }}">
               @csrf
              
              <div class="card-body row">
                <div class="form-group col-md-6">
                    <label for="id_aluno">{{ __('Nome do Aluno') }}</label>

                     <select class="form-control" name="id_aluno" value="{{old('id_aluno')}}">
                        <option > Selecione </option>
                        @foreach($alunos as $alu)
                        <option value="{{ $alu->id }}"> {{$alu->nome}}  </option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="id_empresa">{{ __('Nome da Empresa') }}</label>

                     <select class="form-control" name="id_empresa" value="{{old('id_empresa')}}">
                        <option > Selecione </option>
                        @foreach($empresas as $emp)
                        <option value="{{ $emp->id }}"> {{$emp->nomeEmpresa}}  </option>
                        @endforeach
                        </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="cargaHoraria">{{ __('Carga Horária') }}</label>
                    <input type="number" maxlenght="4" class="form-control" id="cargaHoraria" placeholder="Ex: 100" name="cargaHoraria" value="{{ old('cargaHoraria') }}" required>
               </div>
              
                    <div class="form-group col-md-3">
                    <label for="dataInicio">{{ __('Data de Início') }}</label>
                    <input type="date" class="form-control" id="dataInicio" name="dataInicio" value="{{ old('dataInicio') }}" required>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="dataTermino">{{ __('Data de Término') }}</label>
                    <input type="date" class="form-control" id="dataTermino" name="dataTermino" value="{{ old('dataTermino') }}" required>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="horaEntrada">{{ __('Hora de Entrada') }}</label>
                    <input type="string" class="form-control" id="horaEntrada" placeholder="Ex: 08:00" name="horaEntrada" value="{{ old('horaEntrada') }}" required>
                    </div>
                    <div class="form-group col-md-2">
                    <label for="horaSaida">{{ __('Hora de Saída') }}</label>
                    <input type="string" class="form-control" id="horaSaida" placeholder="Ex: 18:00" name="horaSaida" value="{{ old('horaSaida') }}" required>
                    </div>
                    <div class="form-group col-md-3">
                    <label for="horasRealizadas">{{ __('Horas Realizadas') }}</label>
                    <input type="string" class="form-control" id="horasRealizadas" placeholder="Ex: 80" name="horasRealizadas" value="{{ old('horasRealizadas') }}" required>
                    </div>
                 </div>
                 </div
                
                
                <!-- /.card-body -->

                <div class="card-footer " style="text-align: center;">
                  <button type="submit" class="btn btn-primary">Salvar</button>

                  <button value="Voltar" class="btn btn-danger" onClick="window.history.back();">
                                        Cancelar
                   </button>
                   </div>
                </div>
              </form>
            </div>

</section>
  @endsection
