<?php

namespace App\Http\Controllers;

use App\Models\Poin;
use App\Models\User;
use Illuminate\Http\Request;

class PoinController extends Controller
{
    public function index()
    {
        // ngambil data dari db
        $user = User::all();
        // dd($student);
        return view('poin-coba', ['userlist' => $user]);
    }
}