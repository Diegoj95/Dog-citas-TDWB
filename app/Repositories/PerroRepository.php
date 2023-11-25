<?php

namespace App\Repositories;

use App\Models\Perro;
use Exception;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class PerroRepository
{

    public function registrarPerro($request){
        try {
            $perro = new Perro();
            $perro->nombre = $request->nombre;
            $perro->url_foto = $request->url_foto;
            $perro->descripcion = $request->descripcion;
            $perro->save();
            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            return response()->json([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function actualizarPerro($request){
        try {
            $perro = Perro::find($request->id);
            if (!$perro) {
                return response()->json(["error" => "Perro no encontrado"], Response::HTTP_NOT_FOUND);
            }

            // Verifica si el campo 'nombre' está presente en la solicitud antes de actualizarlo
            if ($request->has('nombre')) {
                $perro->nombre = $request->nombre;
            }

            // Verifica si el campo 'url_foto' está presente en la solicitud antes de actualizarlo
            if ($request->has('url_foto')) {
                $perro->url_foto = $request->url_foto;
            }

            // Verifica si el campo 'descripcion' está presente en la solicitud antes de actualizarlo
            if ($request->has('descripcion')) {
                $perro->descripcion = $request->descripcion;
            }
            $perro->save();
            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            Log::info([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ]);

            return response()->json([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ], Response::HTTP_BAD_REQUEST);
        }

    }

    public function listarAllPerros(){
        //Listar perros
        try {
            $perros = Perro::all();
            return response()->json(["perros" => $perros], Response::HTTP_OK);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ], Response::HTTP_BAD_REQUEST);
        }
    }
    public function listarUnPerro($request){
        //Listar perros
        try {
            $perros = Perro::find($request->id);
            return response()->json(["perros" => $perros], Response::HTTP_OK);
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return response()->json([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ], Response::HTTP_BAD_REQUEST);
        }
    }

    public function eliminarPerro($request){
        try {
            $perro = Perro::find($request->id);
            $perro->delete();

            return response()->json(["perro" => $perro], Response::HTTP_OK);
        } catch (Exception $e) {
            Log::info([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ]);

            return response()->json([
                "error" => $e->getMessage(),
                "linea" => $e->getLine(),
                "file" => $e->getFile(),
                "metodo" => __METHOD__
            ], Response::HTTP_BAD_REQUEST);
        }
    }

}