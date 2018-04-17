<?php

namespace Gestor_Matrimonial\Http\Controllers;


use Gestor_Matrimonial\Models\Invitado;
use Gestor_Matrimonial\Models\Mesa;
use Gestor_Matrimonial\Models\Sala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Salas

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBoda($boda_id)
    {
        $salas = DB::table('salas')->where('id_boda', $boda_id)->get();
        return view('boda', ['boda_id' => $boda_id, 'salas' => $salas]);
    }

    public function FormNewS($boda_id)
    {
        return view('crearSala', ['boda_id' => $boda_id]);
    }

    public function newS($boda_id)
    {
        $data = Request()->validate([
            'name' => 'required',
        ], [
            'name.required' => 'El campo es obligatorio',
        ]);

        Sala::create([
            'nombre_sala' => $data['name'],
            'id_boda' => $boda_id,
        ]);

        return redirect('boda/'.$boda_id);
    }

    public function deleteS($boda_id, $sala_id)
    {
        DB::delete('DELETE FROM `salas` WHERE `salas`.`id` = '.$sala_id);
        return redirect('boda/'.$boda_id);
    }

    // Mesas

    public function indexSala($boda_id, $sala_id)
    {
        $mesas = DB::table('mesas')->where('id_sala', $sala_id)->get();
        return view('sala', ['boda_id' => $boda_id, 'sala_id' => $sala_id, 'mesas' => $mesas]);
    }

    public function FormNewM($boda_id, $sala_id)
    {
        return view('crearMesa', ['boda_id' => $boda_id, 'sala_id' => $sala_id]);
    }

    public function newM($boda_id, $sala_id)
    {
        $data = Request()->validate([
            'numero' => 'required',
            'capacidad' => 'required',
        ], [
            'numero.required' => 'El campo es obligatorio',
            'capacidad.required' => 'El campo es obligatorio',
        ]);

        Mesa::create([
            'numero_mesa' => $data['numero'],
            'capacidad_mesa' => $data['capacidad'],
            'id_sala' => $sala_id,
        ]);

        return redirect('boda/'.$boda_id.'/sala/'.$sala_id);
    }

    public function deleteM($boda_id, $sala_id, $mesa_id)
    {
        DB::delete('DELETE FROM `mesas` WHERE `mesas`.`id` = '.$mesa_id);
        return redirect('boda/'.$boda_id.'/sala/'.$sala_id);
    }

    public function indexMesa($boda_id, $sala_id, $mesa_id)
    {
        $invitados = DB::table('invitados')->where('id_mesa', $mesa_id)->get();
        $capacidad = DB::table('mesas')->where('id', $mesa_id)->get(['capacidad_mesa'])->first()->capacidad_mesa;
        return view('mesa', ['boda_id' => $boda_id, 'sala_id' => $sala_id, 'mesa_id' => $mesa_id, 'capacidad' => $capacidad, 'invitados' => $invitados]);
    }

    // Invitado
    public function FormNewI($boda_id, $sala_id, $mesa_id)
    {
        return view('crearInvitado', ['boda_id' => $boda_id, 'sala_id' => $sala_id, 'mesa_id' => $mesa_id]);
    }

    public function newI($boda_id, $sala_id, $mesa_id)
    {
        $data = Request()->validate([
            'name' => 'required',
            'address' => 'required',
        ], [
            'name.required' => 'El campo es obligatorio',
            'address.required' => 'El campo es obligatorio',
        ]);

        Invitado::create([
            'nombre_invitado' => $data['name'],
            'direccion_invitado' => $data['address'],
            'id_mesa' => $mesa_id,
        ]);

        return redirect('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id);
    }

    public function deleteI($boda_id, $sala_id, $mesa_id, $invitado_id)
    {
        DB::delete('DELETE FROM `invitados` WHERE `invitados`.`id` = '.$invitado_id);
        return redirect('boda/'.$boda_id.'/sala/'.$sala_id.'/mesa/'.$mesa_id);
    }
}
