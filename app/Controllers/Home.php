<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $isi = array(
            'tittle' => 'Home',
            'isi'   => 'v_login'
        );
        return view('layout/v_wrapper', $isi);
    }
}
