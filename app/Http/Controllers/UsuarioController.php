<?php
    namespace App\Http\Controllers;

    use App\User;
    use Auth;
    use Illuminate\Http\Request;

    class UsuarioController extends Controller{
        /** Carga la seccion "Listado de Usuarios" dentro del panel del administrador. */
        public function panel(){
            $usuarios = User::all();

            $usuarios_collection = collect([]);
            foreach($usuarios as $usuario){
                $usuario->load('nivel');
                $usuarios_collection->push($usuario);
            }

            $usuarios_collection = $usuarios_collection->sortByDesc(function ($usuario){
                return $usuario['updated_at'];
            });

            return view('usuario.panel', [
                'usuarios' => $usuarios_collection,
                'autenticado' => Auth::user(),
            ]);
        }
        
        /**
         * Carga la seccion "Editar Usuario" enviando el Usuario seleccionada.
         * 
         * @param $id_usuario El id de la Usuario pasado por la ruta
         */
        public function showEditar($id_usuario){
            $usuario = User::find($id_usuario);

            return view('usuario.editar', [
                'usuario' => $usuario,
            ]);
        }

        /**
         * Valida y actualiza los datos del Usuario seleccionada con los datos del formulario.
         * 
         * @param $request Request
         * @param $id_usuario El id del Usuario pasado por la ruta
         */
        public function doEditar(Request $request, $id_usuario){
            $inputData = $request->input();

            $request->validate([
                'nombre' => 'sometimes|min:2|max:60',
                'correo' => 'required|email|max:100|unique:users,correo,' . $id_usuario . ',id_usuario',
                'clave' => 'sometimes|nullable|min:4|max:40|confirmed',
                'id_nivel' => 'required|numeric',
            ], [
                'nombre.min' => 'El nombre no puede tener menos de :min caracteres.',
                'nombre.max' => 'El nombre no puede tener más de :max caracteres.',
                'correo.required' => 'El correo es obligatorio.',
                'correo.max' => 'El correo no puede tener más de :max caracteres.',
                'correo.unique' => 'El correo ya está en uso.',
                'clave.min' => 'La clave no puede tener menos de :min caracteres.',
                'clave.max' => 'La clave no puede tener más de :max caracteres.',
                'clave.confirmed' => 'Las claves no son iguales.',
                'id_nivel.required' => 'El nivel es obligatorio.',
                'id_nivel.numeric' => 'El nivel debe ser un valor numérico.',
            ]);
            
            $usuario = User::find($id_usuario);

            if(isset($inputData['clave']) && $inputData['clave']){
                $inputData['clave'] = \Hash::make($inputData['clave']);
            }else{
                $inputData['clave'] = $usuario->clave;
            }
            
            $usuario->update($inputData);
            
            return redirect()->route('usuario.panel')->with('status', 'El Usuario: "' . $usuario->nombre . '" fue editado exitosamente.');
        }

        /**
         * Elimina el Usuario seleccionado.
         * 
         * @param $id_usuario El id del Usuario pasado por la ruta
         */
        public function doEliminar($id_usuario){
            $usuario = User::find($id_usuario);
                
            $usuario->delete();
                
            return redirect()->route('usuario.panel')->with('status', 'El Usuario fue eliminado exitosamente.');
        }
    }