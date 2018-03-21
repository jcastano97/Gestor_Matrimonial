<?php

namespace Gestor_Matrimonial\Http\Controllers;

use Gestor_Matrimonial\User;
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
        foreach($bodas_ids as $boda_ids){
            $ObjToPush = DB::table('bodas')->where('id_boda', $boda_ids->id_boda)->first();
            $ObjToPush->cargo = $boda_ids->cargo;
            array_push($bodas, $ObjToPush);
        }
        return view('home', ['bodas' => $bodas]);
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
        ]);

        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => $id,
            'id_usuario' => Auth::id(),
            'cargo' => 'administrador',
        ]);

        return redirect()->route('home');
    }

    public function deleteB($id)
    {
        $resp = DB::table('relacion_usuarios_bodas')->where('id_boda', $id)->where('id_usuario', Auth::id())->where('cargo', 'administrador')->first();

        if ($resp){
            DB::delete('DELETE FROM `relacion_usuarios_bodas` WHERE `relacion_usuarios_bodas`.`id_usuario_boda` = '.$resp->id_usuario_boda);
            DB::delete('DELETE FROM `bodas` WHERE `bodas`.`id_boda` = '.$id);
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
            ]);
        }elseif($name == "deluxe"){
            $id = DB::table('bodas')->insertGetId([
                'nombre_boda' => 'Boda deluxe',
                'descripcion_boda' => 'boda 100 personas',
                'fecha_boda' => time(),
            ]);
        }else{
            $id = DB::table('bodas')->insertGetId([
                'nombre_boda' => 'Boda premium',
                'descripcion_boda' => 'boda 200 personas',
                'fecha_boda' => time(),
            ]);
        }

        DB::table('relacion_usuarios_bodas')->insert([
            'id_boda' => $id,
            'id_usuario' => Auth::id(),
            'cargo' => 'administrador',
        ]);

        return redirect()->route('home');
    }
}
