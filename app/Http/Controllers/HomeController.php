<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Validation\Validator as ValidationValidator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function dashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $data = User::get(); // Mengambil semua data dari tabel users
        return view('index', compact('data')); // Kirim ke view
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
            'nama' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        $data['email'] = $request->email;
        $data['name'] = $request->nama; // <- Perhatikan bagian ini!
        $data['password'] = Hash::make($request->password);

        User::create($data);

        return redirect()->route('index');
    }

}
