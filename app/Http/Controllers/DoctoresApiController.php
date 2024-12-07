<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctoresApiController extends Controller
{
    function index()
    {
        $doctores = Doctor::all();
        return response()->json( $doctores, 200 );
    }

    function show($id){
        $doctor = Doctor::find($id);
        if($doctor){
            return response()->json($doctor,200);
        }else{
            return response()->json(["message"=>"No se encontro la medicina"],404);
        }
    }

    function store(Request $request){
        $doctor = new Doctor();
        $doctor->id = $request->id;
        $doctor->nombre=$request->nombre;
        $doctor->apellido =$request->apellido;
        $doctor->especialidad =$request->especialidad;
        $doctor->save();
        return response()->json($doctor,201);
    }

    function destroy($id){
        $doctor = Doctor::find($id);
        if($doctor){
            $doctor->delete();
            return response()->json(["message"=>"Medicina eliminada"],200);
        }else{
            return response()->json(["message"=>"No se encontro la medicina"],404);
        }
    }

    function update(Request $request,$id){
        $doctor = Doctor::find($id);
        if($doctor){
            $doctor->id = $request->id;
            $doctor->nombre=$request->nombre;
            $doctor->apellido =$request->apellido;
            $doctor->especialidad =$request->especialidad;
            $doctor->save();
            return response()->json($doctor,200);
        }else{
            return response()->json(["message"=>"No se encontro la medicina"],404);
        }
    }
}
