<?php

namespace App\Http\Controllers;

use App\Http\Requests\{PerroRequest};
use App\Repositories\PerroRepository;
use Illuminate\Http\Request;


class PerroController extends Controller
{
    protected PerroRepository $perroRepository;

    public function __construct(perroRepository $perroRepository){
        $this->perroRepository = $perroRepository;
    }
    
    public function registrarPerro(PerroRequest $request){
       return $this->perroRepository->registrarPerro($request);
    }

    public function actualizarPerro(PerroRequest $request){
        return $this->perroRepository->actualizarPerro($request);
     }

     public function listarPerros(Request $request){
        return $this->perroRepository->listarPerros($request);
     }

     public function EliminarPerro(ListarPerroRequest $request){
        return $this->perroRepository->eliminarPerro($request);
     }
}