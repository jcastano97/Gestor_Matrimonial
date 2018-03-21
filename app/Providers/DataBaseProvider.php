<?php

namespace Gestor_Matrimonial\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DataBaseProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function get_bodas()
    {
        $bodas = DB::table('relacion_usuarios_bodas')->where('id_usuario', Auth::id());
        return($bodas);
    }
}
