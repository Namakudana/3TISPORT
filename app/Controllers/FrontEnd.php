<?php

namespace App\Controllers;

class Web extends BaseController
{
    public function index()
    {
        $data = array(
            'title' => 'Halaman Web Zakat',
            'isi' => 'v_frontend',
        );
        return view('v_frontend');
    }
}
