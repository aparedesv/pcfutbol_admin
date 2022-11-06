<?php

namespace App\Controllers\PcFutbol\Backoffice;

class CiutatsBackofficeController extends PcFutbolBackofficeController
{

    public function index()
    {
        $response = $this->ApiCall->get('ciutats');
        
        dd($this->getApiBody($response));
    }
}
