<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Goods;

class GoodsController extends Controller
{
    public function show(Request $request, $id)
    {
        $goods = Goods::find($id);

        return $goods;
    }
}
