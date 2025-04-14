<?php

namespace App\Http\Controllers;

use App\Models\LevelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        if (Auth::check()) { // jika sudah login, maka redirect ke halaman home return redirect('/');
        }
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            $credentials = $request->only('username', 'password');

            if (Auth::attempt($credentials)) {
                return response()->json([
                    'status' => true,
                    'message' => 'Login Berhasil',
                    'redirect' => url('/')
                ]);
            }
            return response()->json([
                'status' => false,
                'message' => 'Login Gagal'
            ]);
        }

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
    public function register()
    {
        $levels = LevelModel::select('level_id', 'level_nama')->get();

        return view('auth.register')->with('levels', $levels);
    }

    public function postRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:m_user,username',
            'nama' => 'required|string|max:255',
            'password' => 'required|string|min:5|confirmed',
            'level_id' => 'required|exists:m_level,level_id',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation Failed.',
                'errors' => $validator->errors(),
            ]);
        }

        UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'level_id' => $request->level_id
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Registration Success.',
            'redirect' => url('login')
        ]);
    }
}

//     public function register()
//     {
//         return view('auth.register');
//     }

//     public function postRegister(Request $request)
//     {
//         if ($request->ajax() || $request->wantsJson()) {
//             $request->validate([
//                 'name' => 'required|string|max:255',
//                 'username' => 'required|string|max:255|unique:m_user',
//                 'password' => 'required|string|min:6',
//             ]);

//             // Cari ID level CUS
//             $cusLevel = LevelModel::where('level_kode', 'CUS')->first();
//             if (!$cusLevel) {
//                 return response()->json([
//                     'status' => false,
//                     'message' => 'Role CUS tidak ditemukan.',
//                 ]);
//             }

//             $user = UserModel::create([
//                 'level_id' => $cusLevel->level_id,
//                 'username' => $request->username,
//                 'nama' => $request->name,
//                 'password' => $request->password,
//             ]);

//             if ($user) {
//                 return response()->json([
//                     'status' => true,
//                     'message' => 'Registrasi Berhasil',
//                     'redirect' => url('login'),
//                 ]);
//             } else {
//                 return response()->json([
//                     'status' => false,
//                     'message' => 'Registrasi Gagal',
//                 ]);
//             }
//         }
//         return redirect('register');
//     }
// }