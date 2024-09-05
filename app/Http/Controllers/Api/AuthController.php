<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterApiRequest;
use App\Http\Resources\LoginResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(RegisterApiRequest $request) {
        $validatedData = $request->validated();
        $validatedData['unhashed_password'] = $validatedData['password'];
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);
        $token = $user->createToken('token')->plainTextToken;
        return new LoginResource([
            'token' => $token,
            'user' => $user,
        ]);
    }

    public function login() {

    }

    public function logout() {

    }
}
