<?php
    namespace App\Http\Controllers;

    use App\Mail\Contactar;
    use App\Models\Web;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Mail;

    class CorreoController extends Controller{
        /** 
         * Contacta a un Usuario con los Administradores.
         * @param Request $request
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
                'g-recaptcha-response.required' => 'La verficación es obligatoria.',
                'g-recaptcha-response.recaptcha' => 'Usted no es un humano.'
            ]);

            $objDemo = new \stdClass();
            $objDemo->nombre = $inputData['nombre'];
            $objDemo->correo = $inputData['correo'];
            $objDemo->telefono = $inputData['telefono'];
            $objDemo->descripcion = $inputData['descripcion'];

            
            Mail::to('info@epem.com.ar')->send(new Contactar($objDemo));

            return redirect()->route('correo.gracias');
        }

        /** De vuelve la visgta de mensaje de exito. */
        public function gracias(){
            return view('correo.gracias');
        }
    }