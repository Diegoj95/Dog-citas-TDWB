<?php

namespace App\Http\Controllers;

use App\Http\Requests\{PerroRequest, InteraccionRequest};
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

   public function listarAllPerros(Request $request){
      return $this->perroRepository->listarAllPerros($request);
   }
   public function listarUnPerro(Request $request){
      return $this->perroRepository->listarUnPerro($request);
   }

   public function EliminarPerro(PerroRequest $request){
      return $this->perroRepository->eliminarPerro($request);
   }

   public function perroRandom(Request $request){
      return $this->perroRepository->perroRandom($request);
   }

   public function perrosCandidatos(Request $request){
      return $this->perroRepository->perrosCandidatos($request);
   }

   public function registrarInteraccion(InteraccionRequest $request){
      return $this->perroRepository->registrarInteraccion($request);
   }

   public function listarPerrosAceptados(Request $request){
      return $this->perroRepository->listarPerrosAceptados($request);
   }
   public function listarPerrosRechazados(Request $request){
      return $this->perroRepository->listarPerrosRechazados($request);
   }
}