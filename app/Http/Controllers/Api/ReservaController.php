<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Horarios;
use App\Models\Menus;
use App\Models\Mesas;
use App\Models\Reservass;
use App\Models\User;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function consultarReservas(Request $request){
        $userToken = $request->user()->id;
        $reservas = Reservass::where('id_cliente', $userToken)->get();
        return $reservas;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function insertarReserva(Request $request){
        // $userToken = $request->user()->id;
        Reservass::create([
            'id_cliente' => $request->user()->id,
            'id_mesa' => $request->id_mesa,
            'id_menu' => $request->id_menu,
            'fecha_reserva' => $request->fecha_reserva,
            'num_tarjeta' => $request->num_tarjeta,
            'num_personas' => $request->num_personas
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $reserva=Reservass::find($id);
        return $reserva;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function actualizarReserva(Request $request, $id){
        $datoReserva=Reservass::where('id',$request->id);         
        $datoReserva->update([
                            'id_mesa'=>$request->id_mesa,
                            'id_menu'=>$request->id_menu,
                            'fecha_reserva'=>$request->fecha_reserva,
                            'num_tarjeta'=>$request->num_tarjeta,
                            'num_personas'=>$request->num_personas,
                            ]);
        
        $reserva=Reservass::find($id);
        return $reserva;

       
     

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function borrarReserva($id){
        $reserva= Reservass::destroy($id);
        return $reserva;
    }

    public function consultarReservasTotal(){
        $reservas = Reservass::all();
        return $reservas;

    }
    public function consultarHorarioTotal(){
        $reservas = Horarios::all();
        return $reservas;

    }
    public function consultarMenuTotal(){
        $reservas = Menus::all();
        return $reservas;

    }
    public function consultarMesaTotal(){
        $reservas = Mesas::all();
        return $reservas;
    }

    public function consultarUsuarioTotal(){
        $reservas = User::all();
        return $reservas;
    }

    public function insertarReservaNueva(Request $request){
        // $userToken = $request->user()->id;
        Reservass::create([
            'id_cliente' => $request->id_cliente,
            'id_mesa' => $request->id_mesa,
            'id_menu' => $request->id_menu,
            'fecha_reserva' => $request->fecha_reserva,
            'num_tarjeta' => $request->num_tarjeta,
            'num_personas' => $request->num_personas
        ]);
    }
}
