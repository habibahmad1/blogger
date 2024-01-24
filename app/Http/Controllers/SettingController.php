<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SettingController extends Controller
{
    public function index()
    {
        return view('dashboard.setting',[
            'title' => 'Setting',
            'post' => User::all()

        ]);
    }
}
