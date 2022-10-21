<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validador;
class Controladorx extends Controller
{
    public function Recuerdo(validador $req){
        return redirect('Formulario')->with('confirmacion','tu recuerdo llego');
}
}
