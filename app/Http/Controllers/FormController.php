<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FormController extends Controller {

	//

  public function imprimir(Request $request) {

    echo "<h1>", $request->flash, "</h1>";

  }

}
