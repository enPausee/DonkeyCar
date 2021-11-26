<?php

namespace App\Controller;

use App\Service\Tools;
use App\Service\Validator;

class MainController extends Controller
{
    public function index()
    {
        if (isset($_POST['search'])) {

            if (Validator::not_empty(['fromDate', 'toDate'])) {
                extract($_POST);
                $errors = [];
                $fromDate = Validator::test_input($fromDate);
                $toDate = Validator::test_input($toDate);

                if (!Validator::validateDate($fromDate)) {
                    $errors[] = "La date de début n'est pas valide";
                }

                if (!Validator::validateDate($toDate)) {
                    $errors[] = "La date de fin n'est pas valide";
                }

                if (count($errors) == 0) {

                    Tools::redirect('/vehicle/index/' . $fromDate . "/" . $toDate);
                } else {
                    Validator::save_input_data();
                }
            } else {
                $errors[] = "Veuillez SVP remplir tous les champs !";
                Validator::save_input_data();
            }
        } else {
            Validator::clear_input_data();
        }

        $this->render('main/index', compact('errors'));
    }
}
