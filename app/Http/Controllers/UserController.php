<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function index() {
         $user = UserModel::with('level')->get();
        // dd($user);
        return view('user', ['data' => $user]);
    }
    // tambah data user dengan eloquent model
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345'),
            
        // ];
        // UserModel::create($data);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);
        

        // $user = UserModel::findOr(  20, ['username', 'nama'], function() {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);
        #Retrieving Single Models

        //  $user = UserModel::where('username', 'manager9')->findOrFail();
        // return view('user', ['data' => $user]);
        #Not Found Exceptions

        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);
        #Retreiving Aggregrates

    //     $user = UserModel::firstOrNew(
    // [
    //             'username' => 'manager33', 
    //             'nama' => 'Manager Tiga Tiga',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2
    //     ],
    // );
    // $user->save();
    //     return view('user', ['data' => $user]);
        #Retreiving or Creating Models

       
        
        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        public function tambah (){
            return view('user_tambah');
        }
        public function tambah_simpan(Request $request)
        {
            UserModel::create([
            'username' => $request->username,
            'nama'=> $request->nama,
            'password' => Hash::make('$request->password'),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');  
    }
        public function ubah($id){
            $user = UserModel::find($id);
            return view('user_ubah', ['data' => $user]);
        }
        public function ubah_simpan($id, Request $request) {

            $user = UserModel::find($id);
    
            $user->username = $request->username;
            $user->nama = $request->nama;
            $user->password = Hash::make('$request->password');
            $user->level_id = $request->level_id;
    
            $user->save();
    
            return redirect('/user');
        }
        public function hapus($id){
            $user = UserModel::find($id);
            $user->delete();

            return redirect('/user');
        }
        #create

    // $user = UserModel::all();
    // return view('user', ['data' => $user]);
        #read
        
    //         $user = UserModel::create(
    //          [
    //             'username' => 'manager11', 
    //             'nama' => 'Manager11',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2
    //         ],
    //  );
    //     $user->username = 'manager12';
    //     $user->save();

    //     $user->wasChanged();
    //     $user->wasChanged('username');
    //     $user->wasChanged(['username', 'level_id']);
    //     $user->wasChanged('nama');
    //     dd($user->wasChanged(['nama', 'username']));
        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);
        
        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);
      
          
        //   $user->isDirty();
        //   $user->isClean();
        //   dd($user->isDirty());
        #atribute changes

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);
        // //coba akses usermodel
        // $user = UserModel::all(); //ambil semua dari tabel m_user
        // return view('user', ['data' => $user]);

        //tambah data user dengan eloquent model
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