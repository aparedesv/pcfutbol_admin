<?php

namespace App\Controllers\PcFutbol\Backoffice;

class DashboardBackofficeController extends PcFutbolBackofficeController
{

    public function index()
    {
        $response = $this->ApiCall->get('ciutats');
        
        dd($this->getApiBody($response));
    }
}
