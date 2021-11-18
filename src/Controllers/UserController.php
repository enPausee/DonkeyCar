<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Services\DataBase;
use App\Services\Http;
use App\Services\Security;

class UserController extends Controller
{
    public function login()
    {
        $this->render('user/login', []);
    }

    public function register()
    {
        if (isset($_POST['submit'])) {
            
            if (Security::not_empty(['firstName', 'lastName','email', 'password','phone','birthDate'])) {
                extract($_POST);
                $errors = [];
                $firstName = Security::test_input($firstName);
                $lastName = Security::test_input($lastName);
                $email = Security::test_input($email);
                $phone = Security::test_input($phone);
                $birthDate = Security::test_input($birthDate);
                $password = Security::test_input($password);
                
                if(!Security::validateLength($firstName)) {
                    $errors['lengthFirstName'][] = "Le prénom est trop court, il doit être compris entre ".Security::LENGTH_MINIMAL." et ".Security::LENGTH_MAXIMAL." caractères"; 
                }

                if(!Security::validateLength($lastName)) {
                    $errors['lengthLastName'][] = "Le nom est trop court, il doit être compris entre ".Security::LENGTH_MINIMAL." et ".Security::LENGTH_MAXIMAL." caractères"; 
                }

                if(!Security::validateLengthPassword($password)) {
                    $errors['lengthPassword'][] = "Le mot de passe est trop court, il doit être compris entre ".Security::LENGTH_MINIMAL_PASSWORD." et ".Security::LENGTH_MAXIMAL." caractères"; 
                }

                if (!Security::validateEmail($email)) {
                    $errors['email'][] = "L'email n'est pas valide"; 
                }

                if (DataBase::is_already_use('email', $email, "user")) {
                    $errors['email'][] = "Cet email existe déjà"; 
                }

                if (!Security::validatePhone($phone)) {
                    $errors['phone'][] = "Le numéro de téléphone n'est pas valide";
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
}
