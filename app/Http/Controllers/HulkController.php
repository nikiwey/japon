<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HulkController extends Controller {

	//

  public function ver($num) {

    echo "Proceso exitoso para el controlador", $num;
    //return view('vhulk')->with('var_hulk', 'Llego al controlador');

  }

}
