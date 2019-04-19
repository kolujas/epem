<?php
    namespace App\Http\Middleware;

    use Auth;
    use Closure;

    class Admin{
        /**
         * Handle an incoming request.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \Closure  $next
         * @return mixed
         */
        public function handle($request, Closure $next){
            $usuario = Auth::user();
        
            if($usuario->nivel->id_nivel == 1){
                return redirect('/')->with('status', 'No tiene permitido acceder ahí.');
            }
            
            return $next($request);
        }
    }