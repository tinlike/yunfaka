<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Secret;

class SecretController extends Controller
{
    public function index(Request $request)
    {
        $secrets = Secret::get();
        return view('admin.secret.index', compact('secrets'));
    }
}
