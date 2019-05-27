<?php
    namespace App\Http\Controllers;

    use App\Mail\Contactar;
    use App\Models\Web;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class CorreoController extends Controller{
        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function contactar(Request $request){
            $inputData = $request->input();

            // dd($inputData);

            $request->validate(Web::$reglas['contactar'], [
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'telefono.required' => 'El teléfono es obligatorio.',
                'telefono.numeric' => 'El teléfono debe ser un valor numérico.',
                'descripcion.required' => 'La descripción de no puede estar vacío.',
            ]);

            $objDemo = new \stdClass();
            $objDemo->nombre = $inputData['nombre'];
            $objDemo->correo = $inputData['correo'];
            $objDemo->telefono = $inputData['telefono'];
            $objDemo->descripcion = $inputData['descripcion'];

            
            Mail::to('info@mutualcoop.org.ar')->send(new Contactar($objDemo));

            return redirect()->route('correo.gracias');
        }

        /** 
         * Contacta a un Usuario con los Administradores.
         * 
         * @param $request Request
         */
        public function preguntar(Request $request){
            $inputData = $request->input();

            $request->validate(Web::$reglas['preguntar'], [
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'suscriptor.required' => 'El número de suscripcion es obligatorio.',
                'suscriptor.numeric' => 'El número de suscripcion debe ser un valor numerico.',
                'suscriptor.exists' => 'El número de suscripcion debe ser un numero existente.',
                'descripcion.required' => 'El mensaje no puede estar vacío.',
            ]);

            $objDemo = new \stdClass();
            $objDemo->correo = $inputData['correo'];
            $objDemo->suscriptor = $inputData['suscriptor'];
            $objDemo->descripcion = $inputData['descripcion'];

            Mail::to('info@mutualcoop.org.ar')->send(new PreguntarMail($objDemo));

            return redirect()->route('suscripcion.listado')->with('status', 'Gracias por contactarte, te responderemos en la brevedad.');
        }

        /** De vuelve la visgta de mensaje de exito. */
        public function gracias(){
            return view('correo.gracias');
        }
    }