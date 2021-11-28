<?php

namespace App\Controller;


class ErrorController extends Controller
{
  public function _404()
  {
    $this->render('error/_404', [], 'layout/error');
  }

  public function _500()
  {
    $this->render('error/_500', [], 'layout/error');
  }
}
