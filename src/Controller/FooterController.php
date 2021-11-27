<?php

namespace App\Controller;

class FooterController extends Controller
{
    public function cgv()
    {
        $this->description = "c.g.v";
        $this->title .= ' -  c.g.v';
        $this->h1 = 'Condition générale de vente';

        $this->render('footer/cgv');
    }

    public function faq()
    {
        $this->description = "f.a.q";
        $this->title .= ' -  f.a.q';
        $this->h1 = 'La foire aux questions';

        $this->render('footer/faq');
    }

    public function contact()
    {
        $this->description = "choix du contact";
        $this->title .= ' -  nous contacter';
        $this->h1 = 'qui êtes vous';

        $this->render('footer/contact');
    }

    public function mail()
    {

        $this->render('footer/mail');
    }
}