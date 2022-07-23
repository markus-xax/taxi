<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\order;
use App\Models\orderOld;
use Illuminate\Http\Request;

class OnController extends Controller
{
    public function On($id)
    {
        $orders = new order();
        $order = $orders->find($id);

        $order->up = 1;

        $order->save();

        return view('go', ['data' => $orders->find($id)]);
    }


}
