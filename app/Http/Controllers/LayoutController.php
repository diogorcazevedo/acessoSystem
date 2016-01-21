<?php

namespace acessoSystem\Http\Controllers;


use acessoSystem\Http\Requests;



class LayoutController extends Controller
{

    public function client()
    {
        return view('layouts.client.index');
    }

    public function admin()
    {
        return view('layouts.admin.index');
    }
}
