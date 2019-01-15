<?php
namespace App\Controllers;

class Controller
{
    protected $f3;

    public function __construct()
    {
        $this->f3 = \Base::instance();
    }
}
