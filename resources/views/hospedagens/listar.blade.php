@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Meus Imóveis</div>

                <div class="panel-body">
                    <table class="table table-bordered">
                        <tr>
                            <th> Titulo </th>
                            <th> Ações </th>
                        </tr>
                        @foreach($imoveis as $imovel)
                            <tr>
                                <td> {{ $imovel->titulo  }} </td>
                                <td> Editar / Deletar </td>
                            </tr>
                        @endforeach;
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
