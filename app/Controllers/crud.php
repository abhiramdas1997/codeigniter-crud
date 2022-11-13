<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class crud extends BaseController
{
    public function index()
    {
        return view('pages/select');
    }

    public function insert()
    {
        return view('pages/insert');
    }
}
