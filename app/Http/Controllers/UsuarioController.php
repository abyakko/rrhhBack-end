<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Area;
use App\Models\Tarjeta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$usuario = Usuario::all();
        //return Usuario::with('areas','carreras','tarjetas','generacions','uniins','extensions')->get();
        //->select('nombres', 'apellido1', 'apellido2','area_id','carrera_id')
        //$tarjeta = Tarjeta::with('usuarios')->get();
        return Usuario::with('personals')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inputs = $request->input();
        //$inputs['password'] = Hash::make(trim($request->password));
        $inputs['password'] = Hash::make(trim($request->password));
        $resp = Usuario::create($inputs);
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
        $usuario = Usuario::where('email', $credenciales['email'])->first();

        if ($usuario && Hash::check($request->password, $usuario->password)) {

            return response()->json([
                'data' => $usuario->email,
                'mensaje' => 'Logueado'
            ]);
        } else {
            // Contraseña incorrecta o usuario no encontrado
            return response()->json([
                'data' => false,
                'mensaje' => 0
            ]);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $exis = Usuario::with('areas','carreras','tarjetas')->find($id);
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
        $exis = Usuario::find($id);
        $exis->nombres = $request->nombres;
        $exis->apellido1 = $request->apellido1;
        $exis->apellido2 = $request->apellido2;
        $exis->celular = $request->celular;
        $exis->direccion = $request->direccion;
        $exis->email = $request->email;
        $exis->password = Hash::make(trim($request->password));
        //$exis->tarjeta_id = $request->tarjeta_id;
        $exis->extension_id = $request->extension_id;
        $exis->carrera_id = $request->carrera_id;
        $exis->uniins_id = $request->uniins_id;
        $exis->tipousuario_id = $request->tipousuario_id;
        $exis->area_id = $request->area_id;
        $exis->generacion_id = $request->generacion_id;

        if (isset($exis)) {
            $exis->nombres = $request->nombres;
            $exis->apellido1 = $request->apellido1;
            $exis->apellido2 = $request->apellido2;
            $exis->celular = $request->celular;
            $exis->direccion = $request->direccion;
            $exis->extension_id = $request->extension_id;
            $exis->email = $request->email;
            $exis->password = Hash::make(trim($request->password));
            //$exis->imagen = $request->imagen;
            //$exis->tarjeta_id = $request->tarjeta_id;
            $exis->carrera_id = $request->carrera_id;
            $exis->uniins_id = $request->uniins_id;
            $exis->tipousuario_id = $request->tipousuario_id;
            $exis->area_id = $request->area_id;
            $exis->generacion_id = $request->generacion_id;

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
        $exis = Usuario::find($id);
        if (isset($exis)) {
            $r = Usuario::destroy($id);
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
