<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'invalid_credentials'], 400);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'could_not_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function getAuthenticatedUser()
    {
        try {
            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (TokenExpiredException $e) {
            return response()->json(['token_expired']);
        } catch (TokenInvalidException $e) {
            return response()->json(['token_invalid']);
        } catch (JWTException $e) {
            return response()->json(['token_absent']);
        }
        return response()->json(compact('user'));
    }

    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'id_rol' => 'required|integer',
                'nombre' => 'required|string',
                'email' => 'required|string|email|unique:users',
                'password' => 'required|string|min:8'
            ]
        );

        if ($validator->fails()) {
            return response()->json($validator->errors()->toJson(), 400);
        }
        $user = User::create([
            'id_rol' => $request->get('id_rol'),
            'nombre' => $request->get('nombre'),
            'email' => $request->get('email'),
            'password' => Hash::make($request->get('password'))
        ]);

        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user', 'token'), 201);
    }

    public function index()
    {
        $item = User::all();
        return $item;
    }

    public function show($id)
    {
        $item = User::findOrFail($id);
        return new UserResource($item);
    }

    public function edit($id)
    {
        $item = User::find($id);
        return new UserResource($item);
    }

    public function update(Request $request, $id)
    {
        $item = User::findOrFail($id);
        $item->id_rol = $request->id_rol;
        $item->id_foto_perfils = $request->id_foto_perfils;
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->password = $request->password;
        $item->descripcion = $request->descripcion;

        if ($item->save()) {
            return new UserResource($item);
        }
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        if ($item->delete()) {
            return new UserResource($item);
        }
    }
}
