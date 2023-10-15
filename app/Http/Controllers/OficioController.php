<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oficio;
use App\Models\Estado_oficio;
use App\Models\Establecimiento;
use App\Http\Controllers\EstablecimientoController;

class OficioController extends Controller
{
    //Muestra listado completo con opciones
    public function index()
    {
        $data = Oficio::join('establecimientos', 'establecimientos.id', '=', 'oficios.escuela_id')
              		->join('estado_oficios', 'estado_oficios.id', '=', 'oficios.estado')
              		->get(['establecimientos.nombreEst','oficios.id', 'oficios.numero','oficios.monto','oficios.detalle_solicitud','estado_oficios.estNombre', 'oficios.date_cambioest', 'estado_oficios.observ']);
        return view('Oficios.index', compact('data'));
    }
    //Carga formulario para agregar oficios
    public function create()
    {
        $establecimientos = Establecimiento::pluck('nombreEst', 'id');
        return view('oficios.create', compact('establecimientos'));
    }

    //Guarda datos ingresados en la funcion create
    public function store(Request $request)
    {
        $oficio = new Oficio();
        $oficio->escuela_id = $request->input('escuela_id');
        $oficio->numero = $request->input('numero');
        $oficio->detalle_solicitud = $request->input('detalle_solicitud');
        $oficio->monto = $request->input('monto');
        $oficio->estado = 1;
        $oficio->save();

        return $this->create();
    }
    //Muestra datos de un oficio en particular
    public function show(string $id)
    {
        $oficio = Oficio::find($id); 
        return view('oficios.show', ['oficio'=>$oficio]);
    }
    //Carga Formulario actualizar
    public function edit(string $id)
    {
        $oficio = Oficio::find($id);
        $estados = Estado_oficio::pluck('estNombre', 'id');
        return view('oficios.edit', ['id'=> $id,'oficio'=>$oficio], compact('estados'));
    }
    //Carga formulario para buscar listado por escuela
    public function buscaPorEscuela()
    {
        return view('oficios.busca');
    }
    //Recibe request del formulario de la funcion buscaPorEscuelka
    public function muestraOficios(Request $request)
    {
        $data = Oficio::join('establecimientos', 'establecimientos.id', '=', 'oficios.escuela_id')
              		->join('estado_oficios', 'estado_oficios.id', '=', 'oficios.estado')
                    ->where('establecimientos.RBD','LIKE', $request->input('rbd'))
              		->get(['establecimientos.nombreEst', 'oficios.numero','oficios.monto','oficios.detalle_solicitud','estado_oficios.estNombre', 'oficios.date_cambioest', 'estado_oficios.observ']);
    
        return view('Oficios.index2', compact('data'));

    }
    //Recibe request del formulario de la funcion edit
    public function updateEstado(Request $request, string $id)
    {
        $oficio = Oficio::find($id);
        $oficio->estado = $request->input('estado');
        $oficio->save();
        return $this->index();
    }
    //Obtiene listado de establecimientos en la base de datos
    public function getEstablecimientosList (){
        $establecimientos = Establecimiento::pluck('nombrenombreEst', 'id');
        return view('establecimientos.create', compact('establecimientos'));
    }
    //Elimina una tupla de solicitud
    public function destroy($id){
        $oficio = Oficio::find($id);
        $oficio->delete();
        return $this->index();
    }
}
