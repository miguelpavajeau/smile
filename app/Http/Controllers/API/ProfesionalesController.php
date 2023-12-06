<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profesionales;

class ProfesionalesController extends Controller
{
    //
    public function get()
    {
        try {
            $data = Profesionales::get();
            return response()->get($data,200);
        } catch (\Throwable $th) {
            return response()->json(['error' =>  $th->getMessage(),500]);
        }
    }

    public function crear(Request $request){
        try {
            $data['tipo_documento']=$request['tipo_documento'];
            $data['documento']=$request['documento'];
            $data['nombre']=$request['nombre'];
            $data['apellido']=$request['apellido'];
            $data['direccion']=$request['direccion'];
            $data['telefono']=$request['telefono'];
            $data['email']=$request['email'];
            $data['ciudad']=$request['ciudad'];
            $data['fecha_nacimiento']=$request['fecha_nacimiento'];
            $data['especialidad']=$request['especialidad'];
             $res= Profesionales::create($data);
             return response()->json($res,200);
        } catch (\Throwable $th) {
            return response()->json(['error' =>  $th->getMessage(),500]);
        }

    }

    public function update(Request $request,$id){
        try {
            $data['tipo_documento']=$request['tipo_documento'];
            $data['documento']=$request['documento'];
            $data['nombre']=$request['nombre'];
            $data['apellido']=$request['apellido'];
            $data['fecha_nacimiento']=$request['fecha_nacimiento'];
            $data['direccion']=$request['direccion'];
            $data['telefono']=$request['telefono'];
            $data['email']=$request['email'];
            $data['ciudad']=$request['ciudad'];
            $data['especialidad']=$request['especialidad'];
            Profesionales::find($id)->update($data);
            $res=Profesionales::find($id);
            return response()->json($res,200);
        } catch (\Throwable $th) {
            return response()->json(['error' =>  $th->getMessage(),500]);
        }
    }
}
