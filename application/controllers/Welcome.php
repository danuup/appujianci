<?php

defined('BASEPATH') or exit('No direct script access allowed');

use Jenssegers\Blade\Blade;

class Welcome extends CI_Controller
{

    public function index()
    {
        //ini komentar
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('form', [])->render();
    }

    public function tampil()
    {
        $nama = 'tata';
        $blade = new Blade(VIEWPATH, APPPATH . 'cache');
        echo $blade->make('tampil', ['nama' => $nama])->render();
    }
}
