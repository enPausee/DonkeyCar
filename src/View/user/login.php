<h1>Connexion</h1>
<?php include(ROOT . '/src/View/parts/_showErrorsForm.php') ?>
<form method="POST" action="/user/login">
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
<a href="/user/register">Pas encore inscrit - Je m'inscris</a>