<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function ingresar()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        if (empty($usuario) || empty($password)) {
            return redirect()->to('/login')
                ->with('error', 'Complete todos los campos');
        }

        // Ejemplo de acceso para realizar pruebas
        if ($usuario === 'Manuel' && $password === '123456789') {

            session()->set([
                'usuario' => $usuario,
                'logueado' => true
            ]);

            return redirect()->to('/dashboard');
        }

        return redirect()->to('/login')
            ->with('error', 'Usuario o contraseña incorrectos');
    }

    public function salir()
    {
        session()->destroy();

        return redirect()->to('/login');
    }
}