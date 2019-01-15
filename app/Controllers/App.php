<?php
namespace App\Controllers;

class App extends Controller {

    public function index()
    {
        $this->f3->get('twig')->display('App.twig');
    }

    public function child()
    {
        $this->f3->get('twig')->display('Child.twig');
    }

}