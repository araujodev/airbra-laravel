@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Cadastrar Imóvel</div>

                    <div class="panel-body">

                        @if(session()->has('message'))
                            <div class="alert alert-success">
                                {{ session()->get('message') }}
                            </div>
                        @endif

                        <form class="form-horizontal" method="POST" action="{{ action('HospedagensController@store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Titulo</label>

                                <div class="col-md-6">
                                    <input id="titulo" type="text" class="form-control" name="titulo" required autofocus value="{{ old('titulo') }}">

                                    @if ($errors->has('titulo'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('descricao') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Descrição do Imóvel</label>

                                <div class="col-md-6">
                                    <textarea name="descricao" id="descricao" rows="4" class="form-control" required value="{{ old('descricao') }}"></textarea>

                                    @if ($errors->has('descricao'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('descricao') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('instrucoes') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Instruções para o Imóvel</label>

                                <div class="col-md-6">
                                    <textarea name="instrucoes" id="instrucoes" rows="4" class="form-control" required value="{{ old('instrucoes') }}"></textarea>

                                    @if ($errors->has('instrucoes'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('instrucoes') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantidade_hospedes') ? ' has-error' : '' }}">
                                <label for="quantidade_hospedes" class="col-md-4 control-label">Quantidade de Hospedes Suportado</label>

                                <div class="col-md-6">
                                    <input id="quantidade_hospedes" type="number" class="form-control" name="quantidade_hospedes" placeholder="2" required value="{{ old('quantidade_hospedes') }}">

                                    @if ($errors->has('quantidade_hospedes'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantidade_hospedes') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantidade_camas') ? ' has-error' : '' }}">
                                <label for="quantidade_camas" class="col-md-4 control-label">Quantidade de Camas disponíveis</label>

                                <div class="col-md-6">
                                    <input id="quantidade_camas" type="number" class="form-control" name="quantidade_camas" placeholder="1" required value="{{ old('quantidade_camas') }}">

                                    @if ($errors->has('quantidade_camas'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantidade_camas') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantidade_quartos') ? ' has-error' : '' }}">
                                <label for="quantidade_quartos" class="col-md-4 control-label">Quantidade de Quartos disponíveis</label>

                                <div class="col-md-6">
                                    <input id="quantidade_quartos" type="number" class="form-control" name="quantidade_quartos" placeholder="3" required value="{{ old('quantidade_quartos') }}">

                                    @if ($errors->has('quantidade_quartos'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantidade_quartos') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('quantidade_banheiros') ? ' has-error' : '' }}">
                                <label for="quantidade_banheiros" class="col-md-4 control-label">Quantidade de Banheiros disponíveis</label>

                                <div class="col-md-6">
                                    <input id="quantidade_banheiros" type="number" class="form-control" name="quantidade_banheiros" placeholder="1" required value="{{ old('quantidade_banheiros') }}">

                                    @if ($errors->has('quantidade_banheiros'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('quantidade_banheiros') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('tipo_hospedagem') ? ' has-error' : '' }}">
                                <label for="tipo_hospedagem" class="col-md-4 control-label">Modalidade de Hospedagem</label>

                                <div class="col-md-6">
                                    <select name="tipo_hospedagem" id="tipo_hospedagem" class="form-control">
                                        <option value="imovel_inteiro"> Imóvel Inteiro </option>
                                        <option value="quarto"> Somente Quarto(s) </option>
                                        <option value="imovel_compartilhado"> Imóvel Compartilhado </option>
                                    </select>

                                    @if ($errors->has('tipo_hospedagem'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('tipo_hospedagem') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('endereco') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Endereço</label>

                                <div class="col-md-6">
                                    <input id="endereco" type="text" class="form-control" name="endereco" required value="{{ old('endereco') }}">

                                    @if ($errors->has('endereco'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('endereco') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Cadastrar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
