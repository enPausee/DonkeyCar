<?php

namespace App\Controller;

class FooterController extends Controller
{
    public function cgv()
    {
        $this->render('footer/cgv');
    }

    public function faq()
    {
        $this->render('footer/faq');
    }

    public function contact()
    {
        $this->render('footer/contact');
    }
}