<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
        public function login(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();
                return response()->json([
                    'success' => true,
                    'message' => 'success',
                    'user' => $user,
                    'role' => $user->role,
                ], 200);
            }

            return response()->json([
                'success' => false,
                'message' => 'Unauthorized',
            ], 401);
            return redirect('/');
        }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', // Set the default role to 'user'
        ]);

        Auth::login($user);
        return response()->json([
            'success' => true,
            'message' => 'Registration successful',
            'user' => $user,
            'role' => $user->role,
        ], 200);
        return redirect('/');
    }

    public function getLoggedInUser()
    {
        // Pastikan ada pengguna yang sudah login sebelumnya
        if (Auth::check()) {
            // Ambil data pengguna yang sedang login
            $user = Auth::user();

            // Kembalikan data pengguna sebagai respons JSON
            return response()->json([
                'user' => $user
            ]);
        }

        // Jika tidak ada pengguna yang login, kembalikan respons kosong atau pesan error
        return response()->json([
            'message' => 'No user logged in'
        ], 404);
    }
}
