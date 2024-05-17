<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Personal::with('ciudads','extensions','items','contratos','vacaciones')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$inputs = $request->input();
        //$inputs['password'] = Hash::make(trim($request->password));
        $inputs['password'] = Hash::make(trim($request->password));
        $resp = Personal::create($inputs);
        return response()->json([
            'data'=>$resp,
            'mensaje'=>'Registrado con exito'
        ]);
        */
        $inputs = $request->input();
        $resp = Personal::create($inputs);
        return response()->json([
            'data'=>$resp,
            'mensaje'=>'Personal registrado con exito'
        ]);
    }

    public function login(Request $request)
    {
        $credenciales = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $usuario = Personal::where('email', $credenciales['email'])->first();

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
        $exis = Personal::with('Personals','carreras')->find($id);
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
        $exis = Personal::find($id);
        $exis->nombre_Personal = $request->nombre_Personal;
        $exis->sigla = $request->sigla;

        if (isset($exis)) {
            $exis->nombre_Personal = $request->nombre_Personal;
            $exis->sigla = $request->sigla;

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
        $exis = Personal::find($id);
        if (isset($exis)) {
            $r = Personal::destroy($id);
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
