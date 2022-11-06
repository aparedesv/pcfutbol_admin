<?php

namespace App\Controllers\PcFutbol;

use App\Controllers\BaseController;
use Config\Services;

class PcFutbolAuthController extends BaseController
{

    public function login()
    {
        echo view('Web/Auth/login');
    }
    
    public function checkLogin()
    {
        $validation = Services::validation();
        $validation->reset();
        $validation->setRuleGroup('login');

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $validation->getErrors());
        }

        // falta fer el login a la API amb email i password per obtenir el token d'usuari
        $response = $this->ApiCall->get('ciutats');
    }
}
