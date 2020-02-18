<?php
    namespace App\Http\Controllers;

    use Auth;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Storage;

    class WebController extends Controller{
        /** Carga la seccion principal. */
        public function inicio(){
            $gallery = collect([]);
            foreach (Storage::files('public/gallery') as $filename) {
                $gallery->push(Storage::url($filename));
            }

            return view('web.inicio', ['gallery' => $gallery]);
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

   