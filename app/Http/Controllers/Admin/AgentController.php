<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AgentController extends Controller
{
    public function index(Request $request)
    {
        $users = User::where('is_agent', 1)->get();
        return view('admin.agent.index', compact('users'));
    }
}
