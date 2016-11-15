<?php namespace App\Http\Middleware;

use Closure;

class Filtro {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{

		if ($request->num != 200) {

			return view('vhulk')->with('var_hulk', 'No supero el filtro');

		}

		return $next($request);
	}

}
