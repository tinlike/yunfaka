<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Goods;

class GoodsController extends Controller
{
    public function index(Request $request)
    {
        $goods = Goods::get();
        return view('admin.goods.index', compact('goods'));
    }
}
