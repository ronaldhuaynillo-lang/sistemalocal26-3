<?php
namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        if (!$session->get('admin')) {
            return redirect()->to('/login');
        }
        return view('dashboard_view');
    }
}