<?php

namespace App\Http\Controllers;

use App\Hospedagem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HospedagensController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listar()
    {
        $lista = Hospedagem::all()->where('user_id', '=', Auth::user()->id);
        return view('hospedagens.listar', ['imoveis' => $lista]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista = Hospedagem::all();
        return view('hospedagens.index', ['imoveis' => $lista]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hospedagens.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validador = Validator::make($request->all(), [
            'titulo' => 'required|string|max:400',
            'descricao' => 'required|string|max:3000',
            'instrucoes' => 'required|string|min:6',
            'quantidade_hospedes' => 'required|numeric',
            'quantidade_camas' => 'required|numeric',
            'quantidade_quartos' => 'required|numeric',
            'quantidade_banheiros' => 'required|numeric',
            'tipo_hospedagem' => 'required|string|max:80',
            'endereco' => 'required|string|min:10',
        ]);

        if ($validador->fails()) {
            return redirect('hospedagens/create')
                ->withErrors($validador)
                ->withInput($request->all());
        }

        $completeData = $request->all();
        $completeData['user_id'] = Auth::user()->id;

        $created = Hospedagem::create($completeData);

        return redirect()->back()->with('message', 'Imóvel cadastrado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hospedagem  $hospedagem
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $item = Hospedagem::find($id);
        return view('hospedagens.exibir', ['im' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hospedagem  $hospedagem
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospedagem $hospedagem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hospedagem  $hospedagem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospedagem $hospedagem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hospedagem  $hospedagem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospedagem $hospedagem)
    {
        //
    }

}
