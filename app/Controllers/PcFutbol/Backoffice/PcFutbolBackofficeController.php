<?php

namespace App\Controllers\PcFutbol\Backoffice;

use App\Controllers\PcFutbol\PcFutbolController;
use Config\Services;

class PcFutbolBackofficeController extends PcFutbolController
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
}
