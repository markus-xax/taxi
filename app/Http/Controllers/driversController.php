<?php

namespace App\Http\Controllers;

use App\Http\Requests\LKRequest;
use App\Models\Driver;
use Illuminate\Http\Request;

class driversController extends Controller
{
    public function registr(LKRequest $req)
    {

        $drivers = new Driver();

        $drivers->name = $req->input('name');
        $drivers->password = $req->input('password');
        $drivers->number = $req->input('number');

        $drivers->save();

        return view('new')->with('success', 'Вы успешно зарегестрировались!');

    }




}
