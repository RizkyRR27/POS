<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index()
    {

        $user = UserModel::firstOrCreate(
            [
                'username' => 'manager22',
                'nama' => 'Manager dua dua',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],
        );
        return view('user', ['data' => $user]);
        // UserModel::create($data);

        // $user = UserModel::where('level_id', 1)->first();
        // return view('user', ['data' => $user]);


        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        // //coba akses usermodel
        // $user = UserModel::all(); //ambil semua dari tabel m_user
        // return view('user', ['data' => $user]);

        // //tambah data user dengan eloquent model
        // $data = [
        //     'username' => 'customer-1',
        //     'nama' => 'Pelanggan',
        //     'password' => Hash::make('12345'),
        //     'level_id' => 3
        // ];
        // UserModel::insert($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'nama' => "Pelanggan Pertama",
        // ];
        // UserModel::where('username', 'customer-1')->update($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

    }
}
