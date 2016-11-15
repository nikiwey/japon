<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Paciente;

class PlanetController extends Controller {

	public function guardar() {

    $paciente = new Paciente();
    $paciente->nombre = "Bruno";
    $paciente->correo = "mail@mail.com";
    $paciente->save();

  }

  public function leer() {

    $pacientes = Paciente::where('nombre', '=', 'Bruno')->get();

    foreach($pacientes as $paciente) {

      echo $paciente->correo;

    }

  }

  public function actualizar() {

    $pacientes = Paciente::where('nombre', '=', 'Bruno')->get();

    foreach($pacientes as $paciente){

      $paciente->correo = "bruno@batman.com";
      $paciente->save();

    }

  }


  public function eliminar() {

    $pacientes = Paciente::where('nombre', '=', 'Bruno')->delete();

  }

}
