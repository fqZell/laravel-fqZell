<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signUp(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|same:re_password',
            'username' => 'required|min:3|max:60|unique:users,username',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator->errors())->withInput($request->all());
        }

        $validated = $validator->validated();

        $validated['password'] = Hash::make($validated['password']);

        $user = User::query()->create($validated);

        Auth::login($user);

        return redirect()->route('home');
    }
}
