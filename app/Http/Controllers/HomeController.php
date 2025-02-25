<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = User::get(); // Mengambil semua data dari tabel users
        return view('index', compact('data')); // Kirim ke view
    }
}
