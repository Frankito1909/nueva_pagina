<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): void
    {
        $data ['titulo'] = 'Pagina Principal';

        echo view('front/head_view', $data);
        echo view('front/navbar_view');
        echo view('front/main');
        echo view('front/footer');
    }
}
