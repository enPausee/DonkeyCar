<h1>Inscription</h1>
<?php include ROOT . '/src/View/parts/_showErrorsForm.php'?>
<form method="POST" action="/user/register">
    <div class="mb-3">
        <label for="first_name" class="form-label">FirstName</label>
        <input type="text" class="form-control" id="first_name" name="first_name"
            value="<?=App\Service\Validator::get_input_data('first_name');?>">
    </div>
    <div class="mb-3">
        <label for="last_name" class="form-label">LastName</label>
        <input type="text" class="form-control" id="last_name" name="last_name"
            value="<?=App\Service\Validator::get_input_data('last_name');?>">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email"
            value="<?=App\Service\Validator::get_input_data('email');?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone"
            value="<?=App\Service\Validator::get_input_data('phone');?>">
    </div>
    <div class="mb-3">
        <label for="birth_date" class="form-label">BirthDate</label>
        <input type="date" class="form-control" id="birth_date" name="birth_date"
            value="<?=App\Service\Validator::get_input_data('birth_date');?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<a href="/user/login">Déjà inscrit - Me connecter</a>