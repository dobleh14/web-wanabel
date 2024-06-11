<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        return view('layout.page.home',[
            'title'      => 'Home',
        ]);
    }
    public function shop()
    {
        return view('layout.page.shop',[
            'title'      => 'Shop',
        ]);
    }
    public function transaksi()
    {
        return view('layout.page.transaksi',[
            'title'      => 'Transaksi',
        ]);
    }
    public function contact()
    {
        return view('layout.page.contact',[
            'title'      => 'Contact Us',
        ]);
    }
}
