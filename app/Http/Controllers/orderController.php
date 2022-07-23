<?php

namespace App\Http\Controllers;

use App\Http\Requests\ordersRequest;
use App\Models\order;
use Illuminate\Http\Request;
use App\Models\Driver;
use Illuminate\Support\Facades\DB;
use App\Traits\Coin;

class orderController extends Controller
{

    public function submit(ordersRequest $req)
    {

        $order = new order();

        $order->backyard = $req->input('backyard');
        $order->street = $req->input('street');
        $order->home = $req->input('home');
        $order->amountH = $req->input('amountH');
        $order->amountC = $req->input('amountC');
        $order->backyardOld = $req->input('backyardOld');
        $order->streetOld = $req->input('streetOld');
        $order->homeOld = $req->input('homeOld');

        $order->save();

        return view('waight', ['data' => Driver::all()])->with('success', 'Ожидание принятие заказа');

    }
    public function ordersAll()
    {
        $order = new order();

        return view('homeDriver', ['all' => order::all()]);
    }

}
