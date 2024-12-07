<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacientesApiController extends Controller
{
    function index()
    {
        $pacientes = Paciente::all();
        return response()->json( $pacientes, 200 );
    }

    function show($id){
        $paciente = Paciente::find($id);
        if($paciente){
            return response()->json($paciente,200);
        }else{
            return response()->json(["message"=>"No se encontro la medicina"],404);
        }
    }

    function store(Request $request){
        $paciente = new Paciente();
        $paciente->id = $request->id;
        $paciente->nombre=$request->nombre;
        $paciente->apellido =$request->apellido;
        $paciente->edad =$request->edad;
        $paciente->sexo =$request->sexo;
        $paciente->save();
        return response()->json($paciente,201);
    }

    function destroy($id){
        $paciente = Paciente::find($id);
        if($paciente){
            $paciente->delete();
            return response()->json(["message"=>"Paciente eliminada"],200);
        }else{
            return response()->json(["message"=>"No se encontro la paciente"],404);
        }
    }

    function update(Request $request,$id){
        $paciente = Paciente::find($id);
        if($paciente){
            $paciente->id = $request->id;
            $paciente->nombre=$request->nombre;
            $paciente->apellido =$request->apellido;
            $paciente->edad =$request->edad;
            $paciente->sexo =$request->sexo;
            $paciente->save();
            return response()->json($paciente,200);
        }else{
            return response()->json(["message"=>"No se encontro la paciente"],404);
        }
    }
}
