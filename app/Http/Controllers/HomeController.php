<?php

namespace Gestor_Matrimonial\Http\Controllers;

use Gestor_Matrimonial\Models\User_Boda;
use Gestor_Matrimonial\User;
use Gestor_Matrimonial\Models\Boda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodas = array();
        $bodas_ids = DB::table('relacion_usuarios_bodas')->where('id_usuario', Auth::id())->get();
        foreach($bodas_ids as $boda_id){
            $ObjToPush = DB::table('bodas')->where('id', $boda_id->id_boda)->first();
            $ObjToPush->cargo = $boda_id->cargo;
            array_push($bodas, $ObjToPush);
        }
        $user = User::find(Auth::id());
        return view('home', ['bodas' => $bodas, 'user_role' => $user->role]);
    }

    public function FormNewB()
    {
        return view('crearBoda');
    }

    public function newB()
    {
        $data = Request()->validate([
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
        ], [
            'name.required' => 'El campo es obligatorio',
            'description.required' => 'El campo es obligatorio',
            'date.required' => 'El campo es obligatorio'
        ]);

        $id = DB::table('bodas')->insertGetId([
            'nombre_boda' => $data['name'],
            'descripcion_boda' => $data['description'],
            'fecha_boda' => strtotime( $data['date'] ),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        User_Boda::create([
            'id_boda' => $id,
            'id_usuario' => Auth::id(),
            'cargo' => 'administrador',
        ]);

        return redirect()->route('home');
    }

    public function deleteB($id)
    {
        $resp = DB::table('relacion_usuarios_bodas')->where('id', $id)->where('id_usuario', Auth::id())->where('cargo', 'administrador')->first();

        if ($resp){
            DB::delete('DELETE FROM `relacion_usuarios_bodas` WHERE `relacion_usuarios_bodas`.`id` = '.$resp->id);
            DB::delete('DELETE FROM `bodas` WHERE `bodas`.`id` = '.$id);
        }

        return redirect()->route('home');
    }

    public function newPackB($name)
    {
        if($name == "basic"){
            $id = DB::table('bodas')->insertGetId([
                'nombre_boda' => 'Boda basica',
                'descripcion_boda' => 'boda 50 personas',
                'fecha_boda' => time(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 1',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 5,
                    'id_sala' => $id_sala
                ]);
            }
        }elseif($name == "deluxe"){
            $id = DB::table('bodas')->insertGetId([
                'nombre_boda' => 'Boda deluxe',
                'descripcion_boda' => 'boda 100 personas',
                'fecha_boda' => time(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 1',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 5,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 2',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 5,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }else{
            $id = DB::table('bodas')->insertGetId([
                'nombre_boda' => 'Boda premium',
                'descripcion_boda' => 'boda 200 personas',
                'fecha_boda' => time(),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 1',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 4,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 2',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 4,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 3',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 4,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 4',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 4,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
            $id_sala = DB::table('salas')->insertGetId([
                'nombre_sala' => 'Sala 5',
                'id_boda' => $id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            for ($i = 1; $i < 11; $i++) {
                DB::table('mesas')->insertGetId([
                    'numero_mesa' => $i,
                    'capacidad_mesa' => 4,
                    'id_sala' => $id_sala,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]);
            }
        }

        User_Boda::create([
            'id_boda' => $id,
            'id_usuario' => Auth::id(),
            'cargo' => 'administrador',
        ]);

        return redirect()->route('home');
    }
}
