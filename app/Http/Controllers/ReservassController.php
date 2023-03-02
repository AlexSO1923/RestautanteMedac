<?php

namespace App\Http\Controllers;

use App\Models\Horarios;
use App\Models\Invitados;
use App\Models\Menus;
use App\Models\Mesas;
use App\Models\User;
use App\Models\Reserva;
use App\Models\Reservass;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('reserva2');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        // $this->validate($request,[
        //     'telefono'=>'required|min:2|max:9',
        //     'id_mesa'=>'required',
        //     'id_menu'=>'required',
        //     'num_tarjeta'=>'required|min:10|max:15',
        //     'num_personas'=>'required|email|'
        // ]);

        Reservass::create([
            'id_cliente' => $request->post('id_cliente'),
            'id_mesa' => $request->post('id_mesa'),
            'id_menu' => $request->post('id_menu'),
            'fecha_reserva' => $request->post('fecha_reserva'),
            'num_tarjeta' => $request->post('num_tarjeta'),
            'num_personas' => $request->post('num_personas')
        ]);
        $datoReserva=Horarios::where('id',$request->input('fecha_reserva'));         
        $datoReserva->update(['estado'=>'reservado']);
        // return view('reserva4');
        // $reservaInvi=User:: where('id',Auth::user()->id)->get();
        $recFecha=Horarios::where('id',$request->input('fecha_reserva'))
        ->get();
        // dd($recFecha->value('fecha'));
        return view('reserva3',['fechasIn'=>$recFecha,'NomIn'=>Auth::user()->name,'emailInv'=>Auth::user()->email]);
    }
    public function storeInvitado(Request $request)
    {

        $this->validate($request,[
            'nombre'=>'required|min:5|max:15',
            'apellidos'=>'required|min:5|max:20',
            'telefono'=>'required|min:2|max:9',
            'id_mesa'=>'required',
            'id_menu'=>'required',
            'num_tarjeta'=>'required|min:10|max:15',
            'num_personas'=>'required|integer'
        ]);

        

        Invitados::create([
            'email' => $request->post('email'),
            'nombre' => $request->post('nombre'),
            'apellidos' => $request->post('apellidos'),
            'telefono' => $request->post('telefono')
        ]);
        
        $reservaIn=Invitados:: orderBy('id','desc')
                                ->get();
        $jo=$reservaIn->first();



        Reservass::create([
            'id_invitado' => $jo->id,
            'id_mesa' => $request->post('id_mesa'),
            'id_menu' => $request->post('id_menu'),
            'fecha_reserva' => $request->post('fecha_reserva'),
            'num_tarjeta' => $request->post('num_tarjeta'),
            'num_personas' => $request->post('num_personas')
        ]);

        $datoReserva=Horarios::where('id',$request->input('fecha_reserva'));         
        $datoReserva->update(['estado'=>'reservado']);
        // dd($datoReserva);
        // return view('index');
        $reservaInvi=Invitados:: orderBy('id','desc')
                                ->get();
        $joInv=$reservaInvi->first();
        $recFecha=Horarios::where('id',$request->input('fecha_reserva'))
        ->get();
        // dd($recFecha->value('fecha'));
        return view('reserva3',['fechasIn'=>$recFecha,'NomIn'=>$joInv->nombre,'apellIn'=>$joInv->apellidos,'emailInv'=>$joInv->email]);
    }
    
    public function storeid(Request $request)
    {           

        // $this->validate($request,[
        //     'nombre'=>'required|min:5|max:15',
        //     'apellidos'=>'required|min:5|max:20',
        //     'telefono'=>'required|min:2|max:9',
        //     'id_mesa'=>'required',
        //     'id_menu'=>'required',
        //     'num_tarjeta'=>'required|min:10|max:15',
        //     'num_personas'=>'required|integer'
        // ]);

			$fechas = $request->post('fecha');
			$horas = $request->post('hora');
			$id = $request->post('horario');
            $menus = Menus::recogerMenus();
            $mesas = Mesas::recogerMesas();
			return view("reservatotal", ['menus' => $menus, 'mesas' => $mesas,'id'=>$id,'fecha'=>$fechas,'hora'=>$horas]);
    }

    public function recogerHoras(Request $request)
    { 
        // $datoReserva=Horarios::where('fecha',$request->input('fecha'))
        //                     ->get();                
        $datoReserva=Horarios::where([
                            ['fecha','=',$request->input('fecha')],
                            ['estado','=','Disponible'],
        ])
                            ->get();                
        return view('reservaFecha', array('datosreserva'=>$datoReserva));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservass  $reservass
     * @return \Illuminate\Http\Response
     */
    public function show(Reservass $reservass)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservass  $reservass
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservass $reservass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservass  $reservass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservass $reservass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservass  $reservass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservass $reservass)
    {
        //
    }

    public function showAll()
    {
        $reservasLista=Reservass::where('id_cliente',Auth::user()->id)
                                ->get();

        return view("Lista", ['nuevasreservas'=>$reservasLista]);
    }
    public function recogerDatos(){
        $reservasLista5=Reservass:: orderBy('id_invitado','desc')
                                ->get();
        $jo=$reservasLista5->first();
        dd($jo->value('id_invitado'));
        // return view("reserva4",['confirmarreservas'=>$reservasLista5->first()]);
    }
    public function mostrarfecha($id){
        $reservasLista=Horarios::where('id',$id)
                                ->get();
        $menus = Menus::recogerMenus();
        $mesas = Mesas::recogerMesas();
        $datos = ['menus' => $menus, 'mesas' => $mesas,'nuevasreservas'=> $reservasLista];
        return view('reservatotal', ['datos' => $datos]);
        //dd($id); 
    }
    public function mostrarfechainvitado($id){
        $reservasLista=Horarios::where('id',$id)
                                ->get();
        $menus = Menus::recogerMenus();
        $mesas = Mesas::recogerMesas();
        $datos = ['menus' => $menus, 'mesas' => $mesas,'nuevasreservas'=>$reservasLista];
        return view('reservatotal', ['datos' => $datos]);
        //dd($id); 
    }
    

    public function delete($id)
    {
        $horarios=Reservass::select('fecha_reserva')
        ->where('id',$id)
        ->get();
        Reservass::find($id)->delete();
        $fechaReserva=Horarios::where('id',$horarios->value('fecha_reserva'));         
        $fechaReserva->update(['estado'=>'Disponible']);
        return back()->with('success', 'Se elimino la reserva correctamente');
    }

    public function Evento()
    {
        $horario = Horarios::select('fecha')
				->where('estado', 'Disponible')
				->groupBy('fecha')
				->get();
	
	
			$datos = array();
	
			foreach ($horario as $row) {
				$datos[] = array(
					'id' => $row["id"],
					'title' => "",
					'start' => $row["fecha"],
					'end' => $row["fecha"],
				);
			}
			return response()->json($datos);
    }

    public function Eventoajax(Request $request){
			$horario = Horarios::where([
				['fecha', $request->get("fecha")],
				['estado', 'Disponible']
			])->get();
			$hora = array();
	
			foreach ($horario as $row) {
				$hora[] = array(
					'id' => $row["id"],
					"hora" => date('H:i', strtotime($row["hora"])),
				);
			}				
            return response()->json($hora);

    }
    // public function detalles(){
    //     $reservasLista=Reservass::where('id_cliente',Auth::user()->id)
    //                         ->get();

    // return view("detalles", ['reserva'=>$reservasLista]);
    // }
}
