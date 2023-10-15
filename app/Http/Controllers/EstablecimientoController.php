<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Establecimiento;

class EstablecimientoController extends Controller{

    public function index(){
        //$establecimientos = DB::select('SELECT * FROM establecimientos');
        return view('establecimientos.index',['Establecimientos'=> Establecimiento::all()]);
    }

    public function create(){
        return view('establecimientos.create');
    }
    public function show($id){
        $establecimiento = Establecimiento::find($id);
        return view('establecimientos.show', ['establecimiento'=>$establecimiento]);
    }
    public function store(Request $request){
        $establecimiento = new Establecimiento();
        $establecimiento->RBD = $request->input('rbd');
        $establecimiento->nombreEst = $request->input('nombreEst');
        $establecimiento->fono = $request->input('fono');
        $establecimiento->mail = $request->input('mail');
        $establecimiento->save();

        Return 'guardado';
    }

    public function edit(Request $request, $id){
        $establecimiento = Establecimiento::find($id);
        //print_r($establecimiento->all());
        return view('establecimientos.edit', ['id'=> $id,'establecimiento'=>$establecimiento]);

    }
    public function update(Request $request, $id){

        $establecimiento = Establecimiento::find($id);
        $establecimiento->RBD = $request->input('rbd');
        $establecimiento->nombreEst = $request->input('nombreEst');
        $establecimiento->fono = $request->input('fono');
        $establecimiento->mail = $request->input('mail');
        $establecimiento->save();

        Return 'Modificado';

    }
    public function destroy($id){
        $establecimiento = Establecimiento::find($id);
        $establecimiento->delete();

        Return 'Eliminado';
    }


}