<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Service\DataBase;
use App\Service\Http;
use App\Service\Security;

class UserController extends Controller
{
    public function login()
    {
        if (isset($_POST['submit'])) {

            if (Security::not_empty(['email', 'password'])) {
                extract($_POST);
                $errors = [];
                $email = Security::test_input($email);
                $password = Security::test_input($password);

                $userModel = new UserModel;
                $userArray = $userModel->findOneByEmail($email);

                if (!$userArray) {
                    $errors[] = "Identifiants incorrects";
                }

                if (count($errors) == 0) {
                    $user = $userModel->hydrate($userArray);

                    // check password
                    if (password_verify($password, $user->getPassword())) {
                        $user->setSession();
                        Http::set_flash('Bienvenue ' . $user->getFirstName() . ' ' . $user->getLastName());
                        //Redirection vers la home page
                        Http::redirect('/');
                    } else {
                        $errors[] = "Identifiants incorrects";
                    }
                } else {
                    Security::save_input_data();
                }
            } else {
                $errors[] = "Veuillez SVP remplir tous les champs !";
                Security::save_input_data();
            }
        } else {
            Security::clear_input_data();
        }
        $this->render('user/login', compact('errors'));
    }

    public function register()
    {
        if (isset($_POST['submit'])) {

            if (Security::not_empty(['firstName', 'lastName', 'email', 'password', 'phone', 'birthDate'])) {
                extract($_POST);
                $errors = [];
                $firstName = Security::test_input($firstName);
                $lastName = Security::test_input($lastName);
                $email = Security::test_input($email);
                $phone = Security::test_input($phone);
                $birthDate = Security::test_input($birthDate);
                $password = Security::test_input($password);

                if (!Security::validateLength($firstName)) {
                    $errors[] = "Le prénom est trop court, il doit être compris entre " . Security::LENGTH_MINIMAL . " et " . Security::LENGTH_MAXIMAL . " caractères";
                }

                if (!Security::validateLength($lastName)) {
                    $errors[] = "Le nom est trop court, il doit être compris entre " . Security::LENGTH_MINIMAL . " et " . Security::LENGTH_MAXIMAL . " caractères";
                }

                if (!Security::validateLengthPassword($password)) {
                    $errors[] = "Le mot de passe est trop court, il doit être compris entre " . Security::LENGTH_MINIMAL_PASSWORD . " et " . Security::LENGTH_MAXIMAL . " caractères";
                }

                if (!Security::validateEmail($email)) {
                    $errors[] = "L'email n'est pas valide";
                }

                if (DataBase::is_already_use('email', $email, "user")) {
                    $errors[] = "Cet email existe déjà";
                }

                if (!Security::validatePhone($phone)) {
                    $errors[] = "Le numéro de téléphone n'est pas valide";
                }

                if (count($errors) == 0) {
                    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
                    $user = new UserModel;
                    $user
                        ->setFirstName($firstName)
                        ->setLastName($lastName)
                        ->setEmail($email)
                        ->setPhone($phone)
                        ->setPassword($passwordHashed)
                        ->setBirthDate($birthDate);

                    $id = $user->create();
                    if ($id) {
                        Http::set_flash("L'utilisateur a été crée", 'success');

                        //Redirection vers la home page
                        Http::redirect('/');
                    } else {
                        Http::set_flash("Un problème est survenu lors de la création du count", 'warning');
                        Security::save_input_data();
                    }
                } else {
                    Security::save_input_data();
                }
            } else {
                $errors[] = "Veuillez SVP remplir tous les champs !";
                Security::save_input_data();
            }
        } else {
            Security::clear_input_data();
        }
        $this->render('user/register', compact('errors'));
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        Http::set_flash('Déconnexion effectuée');

        //Redirection vers la home page
        Http::redirect('/');
    }

    public function profil()
    {
        $userModel = new UserModel;
        $user = $userModel->findOneById($_SESSION['user']['id']);
        $this->render('user/profil', compact('user'));
    }
}
