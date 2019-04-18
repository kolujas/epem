<?php
    namespace App\Http\Controllers;

    use App\Models\Noticia;
    use Auth;
    use Illuminate\Http\Request;

    class NoticiaController extends Controller{
        /** Carga la seccion "Listado de Noticias" dentro del panel del administrador. */
        public function panel(){
            $noticias = Noticia::orderBy('updated_at', 'DESC')->get();
            $cantidad_noticias = count($noticias);

            return view('noticia.panel', [
                'noticias' => $noticias,
                'cantidad' => $cantidad_noticias,
            ]);
        }
    
        /**
         * Carga la seccion "Detalles de la Noticia" enviando la Noticia seleccionada.
         * 
         * @param $slug El slug de la Noticia pasado por la ruta
         */
        public function detalles($slug){
            $noticia = Noticia::findBySlug($slug);

            return view('noticia.detalles', [
                'noticia' => $noticia
            ]);
        }

        /** Carga la seccion "Crear Noticia". */
        public function showCrear(){
            return view('noticia.crear');
        }
        
        /**
         * Valida y crea la Noticia con los datos del formulario.
         * 
         * @param $request Request
         */
        public function doCrear(Request $request){
            $inputData = $request->all();
            
            $request->validate(Noticia::$reglas['crear'], [
                'titulo.required' => 'El título de la noticia no puede estar vacío.',
                'titulo.min' => 'El título de la noticia debe tener al menos :min caracteres.',
                'titulo.max' => 'El título de la noticia no puede tener más de :max caracteres.',
                'subtitulo.min' => 'El subtítulo de la noticia debe tener al menos :min caracteres.',
                'subtitulo.max' => 'El subtítulo de la noticia no puede tener más de :max caracteres.',
                'descripcion.required' => 'La descripción de la noticia no puede estar vacío.',
                'fuente.required' => 'La fuente de la noticia no puede estar vacío.',
                'fuente.min' => 'La fuente de la noticia debe tener al menos :min caracteres.',
                'fuente.max' => 'La fuente de la noticia no puede tener más de :max caracteres.',
                'imagen.required' => 'La imagen de la noticia es obligatoria.',
                'imagen.mimetypes' => 'La imagen de la noticia debe ser extensión JPG/JPEG o PNG.',
            ]);
            
            if($request->hasFile('imagen')){
                $filepath = $request->file('imagen')->hashName('noticias');
                
                $img = Image::make($request->file('imagen'))
                        ->resize(400, 400, function($constrait){
                        	$constrait->aspectRatio();
                        	$constrait->upsize();
                        });
                        
                Storage::put($filepath, (string) $img->encode());
                
                $inputData['imagen'] = $filepath;
            }
            
            $inputData['id_usuario'] = Auth::id();
            $inputData['slug'] = SlugService::createSlug(Noticia::class, 'slug', $inputData['titulo']);

            Noticia::create($inputData);
            
            return redirect()->route('noticia.panel')->with('status', 'Noticia subida correctamente.');
        }
        
        /**
         * Carga la seccion "Editar Noticia" enviando la Noticia seleccionada.
         * 
         * @param $slug El slug de la Noticia pasado por la ruta
         */
        public function showEditar($slug){
            $noticia = Noticia::findBySlug($slug);

            return view('noticia.editar', [
                'noticia' => $noticia
            ]);
        }

        /**
         * Valida y actualiza los datos de la Noticia seleccionada con los datos del formulario.
         * 
         * @param $request Request
         * @param $id_noticia El id de la Noticia pasado por la ruta
         */
        public function doEditar(Request $request, $id_noticia){
            $inputData = $request->input();

            $request->validate(Noticia::$reglas['editar'], [
                'titulo.required' => 'El título de la noticia no puede estar vacío.',
                'titulo.min' => 'El título de la noticia debe tener al menos :min caracteres.',
                'titulo.max' => 'El título de la noticia no puede tener más de :max caracteres.',
                'subtitulo.min' => 'El subtítulo de la noticia debe tener al menos :min caracteres.',
                'subtitulo.max' => 'El subtítulo de la noticia no puede tener más de :max caracteres.',
                'descripcion.required' => 'La descripción de la noticia no puede estar vacío.',
                'fuente.required' => 'La fuente de la noticia no puede estar vacío.',
                'fuente.min' => 'La fuente de la noticia debe tener al menos :min caracteres.',
                'fuente.max' => 'La fuente de la noticia no puede tener más de :max caracteres.',
                'imagen.mimetypes' => 'La imagen de la noticia debe ser extensión JPG/JPEG o PNG.',
            ]);
            
            $noticia = Noticia::find($id_noticia);

            if($request->hasFile('imagen')){
                $imagenActual = $noticia->imagen;
                
                $filepath = $request->file('imagen')->hashName('noticias');
                
                $img = Image::make($request->file('imagen'))
                        ->resize(400, 400, function($constrait){
                        	$constrait->aspectRatio();
                        	$constrait->upsize();
                        });
                        
                Storage::put($filepath, (string) $img->encode());
                
                $inputData['imagen'] = $filepath;
            }else{
                $inputData['imagen'] = $noticia->imagen;
            }
            
            $inputData['id_usuario'] = Auth::id();

            if($inputData['titulo'] != $noticia->titulo){
                $inputData['slug'] = SlugService::createSlug(Noticia::class, 'slug', $inputData['titulo']);
            }
            
            $noticia->update($inputData);
            
            if(isset($imagenActual) && !empty($imagenActual)) {
                Storage::delete($imagenActual);
            }
            
            return redirect()->route('noticia.panel')->with('status', 'La Noticia: "' . $noticia->titulo . '" fue editada exitosamente.');
        }

        /**
         * Elimina la Noticia seleccionada.
         * 
         * @param $id_noticia El id de la Noticia pasado por la ruta
         */
        public function doEliminar($id_noticia){
            $noticia = Noticia::find($id_noticia);

            if(isset($noticia->imagen) && !empty($noticia->imagen)){
                Storage::delete($noticia->imagen);
            }
                
            $noticia->delete();
                
            return redirect()->route('noticia.panel')->with('status', 'La Noticia fue eliminada exitosamente.');
        }
    }