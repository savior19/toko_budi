<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('contents/jumbotron', ['data' => 'Cobaan Saja']);
    }
}