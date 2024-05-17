<?php

namespace App\Http\Controllers;

use App\Models\Generacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GeneracionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Generacion::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        //$inputs['password'] = Hash::make(trim($request->password));
        //$inputs['password'] = Hash::make(trim($request->password));
        $resp = Generacion::create($inputs);
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

        $usuario = Generacion::where('email', $credenciales['email'])->first();

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
        $exis = Generacion::with('Generacions','carreras')->find($id);
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
        $exis = Generacion::find($id);
        $exis->nombres = $request->nombres;
        $exis->apellido1 = $request->apellido1;
        $exis->apellido2 = $request->apellido2;
        $exis->celular = $request->celular;
        $exis->direccion = $request->direccion;
        $exis->tarjeta_id = $request->tarjeta_id;
        $exis->carrera_id = $request->carrera_id;
        $exis->uniins_id = $request->uniins_id;
        $exis->tipousuario_id = $request->tipousuario_id;
        $exis->Generacion_id = $request->Generacion_id;

        if (isset($exis)) {
            $exis->nombres = $request->nombres;
            $exis->apellido1 = $request->apellido1;
            $exis->apellido2 = $request->apellido2;
            $exis->celular = $request->celular;
            $exis->direccion = $request->direccion;
            $exis->tarjeta_id = $request->tarjeta_id;
            $exis->carrera_id = $request->carrera_id;
            $exis->uniins_id = $request->uniins_id;
            $exis->tipousuario_id = $request->tipousuario_id;
            $exis->Generacion_id = $request->Generacion_id;

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
        $exis = Generacion::find($id);
        if (isset($exis)) {
            $r = Generacion::destroy($id);
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
