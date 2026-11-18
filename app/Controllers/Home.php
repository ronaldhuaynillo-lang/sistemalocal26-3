<?php
namespace App\Controllers;
class Home extends BaseController
{
    public function index()
    {
        if (session()->get('autenticado') !== true) {
            return redirect()->to(site_url('login'));
        }
        return view('dashboard_view');
    }
}