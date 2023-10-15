<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Orden_compra;

class OrdenController extends Controller{

    public function index(){
        return view('ordenesCompra.index',['Ordenes'=> Orden_compra::all()]);
    }

    public function create(){
        return view('ordenesCompra.create');
    }
    public function show($id){
        $orden = Orden_compra::find($id);
        return view('ordenesCompra.show', ['ordenCompra'=>$orden]);
    }
    public function store(Request $request){
        $orden = new Orden_compra();
        $orden->idOficio = $request->input('idOficio');
        $orden->idmp = $request->input('idmp');
        $orden->fechaOc = $request->input('fechaOc');
        $orden->save();

        Return 'guardado';
    }

    public function edit(Request $request, $id){
        $orden = Orden_compra::find($id);
        return view('ordenesCompra.edit', ['id'=> $id,'ordenesCompra'=>$orden]);

    }
    public function update(Request $request, $id){

        $orden = Orden_compra::find($id);
        $orden->idOficio = $request->input('idOficio');
        $orden->idmp = $request->input('idmp');
        $orden->fechaOc = $request->input('fechaOc');
        $orden->save();

        Return 'Modificado';
    }
    public function destroy($id){
        $orden = Orden_compra::find($id);
        $orden->delete();

        Return 'Eliminado';
    }

}