<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HulkController extends Controller {

	//

  public function ver($num) {

    echo "llego al controllador y se imprime ", $num;
    //return view('vhulk')->with('var_hulk', 'Llego al controlador');

  }

}
