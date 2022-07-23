<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\order;
use App\Models\orderOld;
use Illuminate\Http\Request;

class PostOnController extends Controller
{
    public function iOn($id)
    {
        $orders = new order();

        if($orders->find($id)->up == 1)
        {
            return view('goOld', ['driver' => Driver::find($id)])->with('success', 'Притяного пути!');
        }
    }
}
