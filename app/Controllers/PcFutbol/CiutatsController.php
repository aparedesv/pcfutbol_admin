<?php

namespace App\Controllers\PcFutbol;

class CiutatsController extends PcFutbolController
{

    public function index()
    {
        $response = $this->ApiCall->get('ciutats');
        
        dd($this->getApiBody($response));
    }
}
