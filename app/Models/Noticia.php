<?php
    namespace App\Models;

    use App\User;
    use Cviebrock\EloquentSluggable\Sluggable;
    use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
    use Illuminate\Database\Eloquent\Model;

    class Noticia extends Model{
        use Sluggable, SluggableScopeHelpers;

        /** @var string El nombre de la tabla. */
        protected $table = 'noticias';
        
        /** @var string El nombre de la PK. */
        protected $primaryKey = 'id_noticia';

        /** @var array Los atributos que se van a cargar de forma masiva. */
        protected $fillable = [
            'titulo', 'subtitulo', 'descripcion', 'fuente', 'imagen', 'id_usuario', 'slug',
        ];
        
        /** Trae el Usuario que coincidan con el PK. */
        public function usuario(){
            return $this->belongsTo(User::class, 'id_usuario', 'id_usuario');
        }
        
        /** @var array Las reglas de validación. */
        public static $reglas = [
            'crear' => [
                'titulo' => 'required|min:3|max:150',
                'subtitulo' => 'nullable|min:3|max:150',
                'descripcion' => 'required',
                'fuente' => 'required|min:2|max:60',
                'imagen' => 'required|mimetypes:image/jpeg,image/png',
            ],'editar' => [
                'titulo' => 'required|min:3|max:150',
                'subtitulo' => 'nullable|min:3|max:150',
                'descripcion' => 'required',
                'fuente' => 'required|min:2|max:60',
                'imagen' => 'sometimes|mimetypes:image/jpeg,image/png',
            ]
        ];
        
        /**
         * Devuelve la configuracion del slug del modelo.
         * 
         * @return array
         */
        public function sluggable(){
            return [
                'slug' => [
                    'source'	=> 'titulo',
                    'onUpdate'	=> true,
                ]
            ];
        }
    }