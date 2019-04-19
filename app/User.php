<?php
    namespace App;

    use App\Models\Noticia;
    use App\Models\Nivel;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class User extends Authenticatable{
        use Notifiable;
        
        /** @var string El nombre de la PK. */
        protected $primaryKey = 'id_usuario';

        /** @var array Los atributos que se van a cargar de forma masiva. */
        protected $fillable = [
            'nombre', 'correo', 'clave', 'id_nivel',
        ];

        /** @var array Los atributos que no se van a ver. */
        protected $hidden = [
            'clave', 'remember_token',
        ];
        
        /** Trae el Nivel que coincidan con el PK. */
        public function nivel(){
            return $this->belongsTo(Nivel::class, 'id_nivel', 'id_nivel');
        }
        
        /** Trae todas las Noticias que coincidan con el PK. */
        public function noticias(){
            return $this->hasMany(Noticia::class, 'id_usuario', 'id_usuario');
        }
        
        /** @var array Las reglas de validación. */
        public static $reglas = [
            'ingresar' => [
                'correo' => 'required',
                'clave' => 'required|min:4|max:40'
            ],'registrar' => [
                'nombre' => 'required|min:2|max:60',
                'correo' => 'required|email|max:100|unique:users',
                'clave' => 'required|min:4|max:40|confirmed',
            ],'editar' => [],
        ];

        /** Establece cual campo va a funcionar como la "Password" guardada para verificar su Autenticacion. */
        public function getAuthPassword(){
            return $this->clave;
        }
    }