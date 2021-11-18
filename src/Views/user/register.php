<h1>Inscription</h1>
<?php include(ROOT.'/src/Views/parts/_showErrorsForm.php') ?>
<form method="POST" action="/user/register">
    <div class="mb-3">
        <label for="firstName" class="form-label">FirstName</label>
        <input type="text" class="form-control" id="firstName" name="firstName" value="<?= App\Services\Security::get_input_data('firstName');  ?>">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">LastName</label>
        <input type="text" class="form-control" id="lastName" name="lastName" value="<?= App\Services\Security::get_input_data('lastName');  ?>" >
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" value="<?= App\Services\Security::get_input_data('email');  ?>">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone" value="<?= App\Services\Security::get_input_data('phone');  ?>">
    </div>
    <div class="mb-3">
        <label for="birthDate" class="form-label">BirthDate</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" value="<?= App\Services\Security::get_input_data('birthDate');  ?>">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<a href="/user/login">Déjà inscrit - Me connecter</a>