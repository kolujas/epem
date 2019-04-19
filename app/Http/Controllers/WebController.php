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
    }