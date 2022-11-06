<?php

namespace App\Controllers\PcFutbol;

use App\Controllers\BaseController;

class PcFutbolHomeController extends BaseController
{

    public function index()
    {
        echo view('Web/Home/index');
    }
}
