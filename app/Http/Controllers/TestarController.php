<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class TestarController extends Controller
{
    public function testar()
    {
        $user=User::all();
        return response()->json($user);
    }

}
