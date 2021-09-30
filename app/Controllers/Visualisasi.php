<?php

namespace App\Controllers;

class Visualisasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Visualisasi',
            'script' => 'visualisasi',
            'style' => 'visualisasi',
            'active' => 'visualisasi',
            'link' => '',
        ];
        return view('visualisasi/index' , $data);
    }
}
