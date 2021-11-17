<?php 

namespace App\Controllers;

class UserController extends Controller
{
    public function login()
    {
        $this->render('user/login', []);
    }
}