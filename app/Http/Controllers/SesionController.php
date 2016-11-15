<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SesionController extends Controller {

	//

  public function prueba(Request $request) {

    /* $request->session()->put('nemo', ['uno', 'dos']);

    $request->session()->push('nemo', 'tres');

    $request->session()->forget('nemo');

    $dog = $request->session()->get('nemo');

    $dog = session('nemo');

    var_dump($dog); */

    $request->session()->put('jirafa', 'Hola Mexico');

    var_dump($request->session()->get('jirafa'));

  }

}
