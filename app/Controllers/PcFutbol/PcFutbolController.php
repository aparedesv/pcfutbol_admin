<?php

namespace App\Controllers\PcFutbol;

use App\Controllers\BaseController;
use Config\Services;

class PcFutbolController extends BaseController
{
    // controller pare
    public function __construct()
    {
        $options = [
            'baseURI' => env('API_URL'),
            'headers' => [
                "Authorization" => "Bearer b8933bf7172fdd9be4bdb329a6a144ba"
            ],
        ];

        $this->ApiCall = Services::curlrequest($options);
    }

    public function getApiBody($response)
    {
        return $response->getBody();
    }
}
