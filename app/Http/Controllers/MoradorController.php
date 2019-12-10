<?php

namespace App\Http\Controllers;

use App\Morador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MoradorController extends Controller
{

    /**
     * index - Exibir uma relaçao de registro na "tela"
     * create - Exibir um formulário HTML para ser solicitado dados ao usuário
     * store - Recebe os dados do formulário (via create) e envia para o BD.
     * show - Exibir uma página com os dados de um determinado registro.
     * edit - Exibir um formulário com os dados de um determinado registro.
     * update - Recebe os dados do formulário (via edit) e atualizado no BD.
     * destroy - Exclui um determinado registro do BD.
     */


    public function index()
    {
        $moradores = Morador::all();

        return view('moradores.index', compact('moradores'));
    }

    public function create()
    {
        return view('moradores.create');
    }

    public function store(Request $request)
    {
        Morador::create($request->all());

        return redirect()->route('moradores.index');
    }

    public function show($id)
    {
        $morador = Morador::find($id);

        return view('moradores.show', compact('morador'));
    }


    public function edit($id)
    {
        $morador = Morador::find($id);

        return view('moradores.edit', compact('morador'));
    }

    public function update(Request $request, $id)
    {
        // Exibe na tela os valores das variáveis recebidas
        // como parâmetro vindas do formulário
        // dd($id, $request);

        // update moradores set campo1=valor1, campo2=valor2 ... where id=$id
        DB::table('moradores')
            ->where('id', $id)
            ->update(
                [
                'nome_morador' => $request->nome,
                'creci' => $request->creci,
                'fone' => $request->fone,
                'email' => $request->email,
                'nome_moradora' => $request->nome_moradora
            ]);

        return redirect()->route('moradores.index');
    }

    public function destroy($id)
    {
        //dd($morador);

        Morador::destroy($id);

        return redirect()->route('home.index');
    }
}
