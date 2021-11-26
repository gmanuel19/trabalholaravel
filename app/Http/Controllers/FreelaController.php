<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\trabalhos;
use App\Models\User;

class FreelaController extends Controller
{
    private $objUser;
    private $objFreela;

    public function __construct()
    {
        $this->objUser = new User();
        $this->objFreela = new trabalhos();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabalhos=$this->objFreela->all();
        return view('index', compact('trabalhos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuarios = $this->objUser->all();
        return view('create', compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cad=$this->objFreela->create([
            'servico'=>$request->servico,
            'cliente'=>$request->cliente,
            'prazo'=>$request->prazo,
            'valor'=>$request->valor,
            'id_usuario'=> $request->id_usuario 
        ]);

        if($cad){
            return redirect('freela');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $freela = $this->objFreela->find($id);
        $usuarios = $this->objUser->all();
        return view('create', compact('freela', 'usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objFreela->where(['id'=>$id])->update([
            'servico'=>$request->servico,
            'cliente'=>$request->cliente,
            'prazo'=>$request->prazo,
            'valor'=>$request->valor,
            'id_usuario'=> $request->id_usuario 
        ]);
        return redirect('freela');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->objFreela->where(['id'=>$id])->delete();
        return redirect('freela');
    }
}
