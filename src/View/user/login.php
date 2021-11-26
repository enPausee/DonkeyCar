<?php include(ROOT . '/src/View/parts/_showErrorsForm.php') ?>
<div class="login-box">
    <h1><?= $this->h1 ?></h1>
    <form method="POST" action="/user/login">
        <div class="user-box">
            <input type="text" id="email" name="email" required>
            <label for="email">Email address</label>
        </div>
        <div class="user-box">
            <input type="password" id="password" name="password" required>
            <label for="password">Password</label>
        </div>
        <a>
            <span></span>           <!-- Les 4 span correspond a chaque cote l'animation autour du submit -->
            <span></span>
            <span></span>
            <span></span>
            <input type="submit" name="submit" value="Submit" class="login-input"></input>
        </a>
    </form>
</div>