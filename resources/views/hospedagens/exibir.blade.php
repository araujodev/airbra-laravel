@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Ver Imóvel</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th> Titulo </th>
                            <td> {{ $im->titulo  }} </td>
                        </tr>
                        <tr>
                            <th> Descrição </th>
                            <td> {{ $im->descricao  }} </td>
                        </tr>
                        <tr>
                            <th> Instruções </th>
                            <td> {{ $im->instrucoes}} </td>
                        </tr>
                        <tr>
                            <th> Quantidade hospedes </th>
                            <td> {{ $im->quantidade_hospedes}} </td>
                        </tr>
                        <tr>
                            <th> Quantidade camas </th>
                            <td> {{ $im->quantidade_camas}} </td>
                        </tr>
                        <tr>
                            <th> Quantidade quartos </th>
                            <td> {{ $im->quantidade_quartos}} </td>
                        </tr>
                        <tr>
                            <th> Quantidade banheiros </th>
                            <td> {{ $im->quantidade_banheiros}} </td>
                        </tr>
                        <tr>
                            <th> Modadelidade de hospedagem </th>
                            <td> {{ $im->tipo_hospedagem}} </td>
                        </tr>
                        <tr>
                            <th> Endereço </th>
                            <td> {{ $im->endereco}} </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
