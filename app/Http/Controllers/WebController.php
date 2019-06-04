<?php
    namespace App\Http\Controllers;

    use Auth;
    use Illuminate\Http\Request;

    class WebController extends Controller{
        /** Carga la seccion principal. */
        public function inicio(){
            return view('web.inicio', []);
        }

        /** Carga la seccion panel de administrador. */
        public function panel(){
            return view('web.panel', ['usuario' => Auth::user()]);
        }

        public function ingresar(){
            return view('web.ingresar');
        }
    
        public function crear(){
            return view('eventos.crear');
        }
    
        public function listado(){
            return view('eventos.listado');
        }
    }

   