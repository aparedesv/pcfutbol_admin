<?php

namespace App\Controllers\PcFutbol;

use App\Controllers\BaseController;

class PcFutbolController extends BaseController
{

    public function getApiBody($response)
    {
        return $response->getBody();
    }
}
