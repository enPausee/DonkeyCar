<?php

namespace App\Controller;

use App\Model\UserModel;
use App\Service\DataBase;
use App\Service\Tools;
use App\Service\Validator;

class UserController extends Controller
{
    public function login()
    {
        $this->title .= ' - login';
        $this->description = "Page de connexion";
        $this->h1 = "Connexion";
        if (isset($_POST['submit'])) {

            if (Validator::not_empty(['email', 'password'])) {
                extract($_POST);
                $errors = [];
                $email = Validator::test_input($email);
                $password = Validator::test_input($password);

                $userModel = new UserModel;
                $userArray = $userModel->findOneByEmail($email);

                if (!$userArray) {
                    $errors[] = "Identifiants incorrects";
                }

                if (count($errors) == 0) {
                    $user = $userModel->hydrate($userArray);

                    // check password
                    if (password_verify($password, $user->getPassword())) {
                        if ($user->getRole() === 'ADMIN') {

                            $user->setSession();
                            Tools::set_flash('Bienvenue admin ' . $user->getFirst_name() . ' ' . $user->getLast_name());
                            //Redirection vers la home page
                            Tools::redirect('/');}
                        $user->setSession();
                        Tools::set_flash('Bienvenue ' . $user->getFirst_name() . ' ' . $user->getLast_name());
                        //Redirection vers la home page
                        Tools::redirect('/');

                    } else {
                        $errors[] = "Identifiants incorrects";
                    }
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
        $this->render('user/login', compact('errors'));
    }

    public function register()
    {
        $this->title .= ' - register';
        $this->description = "Page d'inscription";
        $this->h1 = "Inscription";
        if (isset($_POST['submit'])) {

            if (Validator::not_empty(['first_name', 'last_name', 'email', 'password', 'phone', 'birth_date'])) {
                extract($_POST);
                $errors = [];
                $first_name = Validator::test_input($first_name);
                $last_name = Validator::test_input($last_name);
                $email = Validator::test_input($email);
                $phone = Validator::test_input($phone);
                $birth_date = Validator::test_input($birth_date);
                $password = Validator::test_input($password);

                if (!Validator::validateLength($first_name)) {
                    $errors[] = "Le prénom est trop court, il doit être compris entre " . Validator::LENGTH_MINIMAL . " et " . Validator::LENGTH_MAXIMAL . " caractères";
                }

                if (!Validator::validateLength($last_name)) {
                    $errors[] = "Le nom est trop court, il doit être compris entre " . Validator::LENGTH_MINIMAL . " et " . Validator::LENGTH_MAXIMAL . " caractères";
                }

                if (!Validator::validateLengthPassword($password)) {
                    $errors[] = "Le mot de passe est trop court, il doit être compris entre " . Validator::LENGTH_MINIMAL_PASSWORD . " et " . Validator::LENGTH_MAXIMAL . " caractères";
                }

                if (!Validator::validateEmail($email)) {
                    $errors[] = "L'email n'est pas valide";
                }

                if (DataBase::is_already_use('email', $email, "user")) {
                    $errors[] = "Cet email existe déjà";
                }

                if (!Validator::validatePhone($phone)) {
                    $errors[] = "Le numéro de téléphone n'est pas valide";
                }

                if (count($errors) == 0) {
                    $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
                    $user = new UserModel;
                    $user
                        ->setFirst_name($first_name)
                        ->setLast_name($last_name)
                        ->setEmail($email)
                        ->setPhone($phone)
                        ->setPassword($passwordHashed)
                        ->setBirth_date($birth_date);

                    $id = $user->create();
                    if ($id) {
                        Tools::set_flash("L'utilisateur a été crée", 'success');

                        //Redirection vers la home page
                        Tools::redirect('/');
                    } else {
                        Tools::set_flash("Un problème est survenu lors de la création du count", 'warning');
                        Validator::save_input_data();
                    }
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
        $this->render('user/register', compact('errors'));
    }

    public function logout()
    {
        if (isset($_SESSION['user'])) {
            unset($_SESSION['user']);
        }

        Tools::set_flash('Déconnexion effectuée');

        //Redirection vers la home page
        Tools::redirect('/');
    }

    public function profil()
    {
        $userModel = new UserModel;
        $user = $userModel->findOneById($_SESSION['user']['id']);
        $this->render('user/profil', compact('user'));
    }

    public function edit()
    {
        $userModel = new UserModel;
        $user = $userModel->findOneById($_SESSION['user']['id']);
        $this->render('user/edit', compact('user'));
    }

    public function saveEdit()
    {
        $userModel = new UserModel;

        $donnees = [
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone'],
        ];

        $user = $userModel->hydrate($donnees);
        $userModel->update($_SESSION['user']['id'], $donnees);

        Tools::set_flash('Modification du profil effectuée');
        //Redirection vers la page profil
        Tools::redirect('/user/profil');
    }
}