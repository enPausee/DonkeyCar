<h1>Inscription</h1>
<p class="errors">
    <?php
    if (isset($errors) && count($errors) != 0) {
        foreach ($errors as $key => $value) {
            foreach ($value as $error) {
                echo $error.'<br/>';
            }
        }
    }
    ?>
</p>
<form method="POST" action="/user/register">
    <div class="mb-3">
        <label for="firstName" class="form-label">FirstName</label>
        <input type="text" class="form-control" id="firstName" name="firstName" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="lastName" class="form-label">LastName</label>
        <input type="text" class="form-control" id="lastName" name="lastName" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Phone number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="birthDate" class="form-label">BirthDate</label>
        <input type="date" class="form-control" id="birthDate" name="birthDate" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
<a href="/user/login">Déjà inscrit - Me connecter</a>