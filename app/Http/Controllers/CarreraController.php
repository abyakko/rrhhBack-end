<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Carrera::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        //$inputs['password'] = Hash::make(trim($request->password));
        $inputs['password'] = Hash::make(trim($request->password));
        $resp = Carrera::create($inputs);
        return response()->json([
            'data'=>$resp,
            'mensaje'=>'Registrado con exito'
        ]);
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $usuario = Carrera::where('email', $credenciales['email'])->first();

        if ($usuario) {
            return response()->json([
                'data'=>$usuario->email,
                'mensaje'=>'Logueado'
            ]);
        }else{
            return response()->json([
                'data'=>false,
                'mensaje'=>'No hecho'
            ]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exis = Carrera::find($id);
        if ($exis) {

            return response()->json([
                'data'=>$exis,
                    'mensaje'=>'Encontrado con exito'
                ]);
        }else {
            return response()->json([
                    'data'=>'error',
                    'mensaje'=>'No encontrado'
                ]);
        }

        /*if (isset($exis)) {
            return response()->json([
                'data'=>$exis,
                'mensaje'=>'Encontrado con exito'
            ]);
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe.'
            ]);
        }*/
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $exis = Carrera::find($id);
        $exis->nombre_carrera = $request->nombre_carrera;


        if (isset($exis)) {
            $exis->nombre_carrera = $request->nombre_carrera;

            if ($exis->save()) {
                return response()->json([
                    'data'=>$exis,
                    'mensaje'=>'Actualizado con exito'
                ]);
            }else{
                return response()->json([
                    'error'=>true,
                    'mensaje'=>'No se actualizo.'
                ]);
            }
            return ;
        }else{
            return response()->json([
                'error'=>true,
                'mensaje'=>'No existe.'
            ]);
        }
        return isset($exis);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exis = Carrera::find($id);
        if (isset($exis)) {
            $r = Carrera::destroy($id);
            if ($r) {
                return response()->json([
                    'data' => $exis,
                    'mensaje' => 'Estudiante eliminado con exito.',
                ]);
            }else {
                return response()->json([
                    'data' => $exis,
                    'mensaje' => 'Estudiante NO existe.',
                ]);
            }
        }else {
            return response()->json([
                'error'=>true,
                'mensaje'=>'No se actualizo el estudiante.'
            ]);
        }
    }
}
