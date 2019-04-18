<?php
    namespace App\Http\Controllers;

    use App\User;
    use Auth;
    use Illuminate\Http\Request;

    class AuthController extends Controller{
        /**
         * Valida y loguea al Usuario.
         * 
         * @param $request Request
         */
        public function doIngresar(Request $request){
            $request->validate(User::$reglas['ingresar'], [
                'correo.required' => 'El correo es obligatorio.',
                'clave.required' => 'La clave es obligatoria.',
                'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                'clave.max' => 'La clave no puede tener más de :max caracteres.',
            ]);
            
            $input = $request->input();

            if(isset($input['recordar'])){
                foreach($input['recordar'] as $checkbox){
                    if($checkbox){
                        $recordar = true;
                    }else{
                        $recordar = false;
                    }
                }
            }else{
                $recordar = false;
            }
            
            if(Auth::attempt(['password' => $input['clave'], 'correo' => $input['dato']], $recordar)){
                return redirect()->route('web.panel')->with('status', 'Sesión Iniciada.');
            }else{
                return redirect()->route('web.inicio')->withInput()->with('status', 'Correo y/o clave incorrectos.');
            }
        }

        /** Carga la seccion de "Registro de Usuarios". */
        public function showRegistrar(){
            return view('usuario.registrar',[]);
        }
        
        /**
         * Valida y crea un Usuario.
         * 
         * @param $request Request
         */
        public function doRegistrar(Request $request){
            $inputData = $request->input();

            $request->validate(User::$reglas['registrar'], [
                'nombre.required' => 'El nombre es obligatorio.',
                'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'correo.unique' => 'El correo ya está en uso.',
                'clave.required' => 'La clave es obligatoria.',
                'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                'clave.max' => 'La clave no puede tener más de :max caracteres.',
                'clave.confirmed' => 'Las claves no son iguales.',
                'id_nivel.required' => 'El nivel es obligatorio.',
                'id_nivel.numeric' => 'El nivel debe ser un valor numerico.',
            ]);
    
            $inputData['clave'] = \Hash::make($inputData['clave']);
            
            $usuario = User::create($inputData);
            
            return redirect()->route('usuario.panel')->with('status', 'Usuario creado correctamente.');
        }
        
        /** Desloguea al Usuario. */
        public function doSalir(){
            Auth::logout();
            return redirect()->route('web.inicio')->with('status', 'Sesión Cerrada.');
        }
    }