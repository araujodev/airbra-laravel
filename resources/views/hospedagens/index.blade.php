@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Todos os Imoveis</div>

                <div class="panel-body">
                    <div class="row">
                    @foreach($imoveis as $imovel)

                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="{{ asset('images/item_sem_imagem.png') }}" alt="Imovel">
                                <div class="caption">
                                    <h3> {{ $imovel->titulo  }} </h3>
                                    <p> Quantidade de Quartos: {{ $imovel->quantidade_quartos  }} </p>
                                    <p><a href="{{ url('hospedagens', ['id' => $imovel->id]) }}" class="btn btn-primary btn-block" role="button">Mais Detalhes</a></p>
                                </div>
                            </div>
                        </div>

                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
