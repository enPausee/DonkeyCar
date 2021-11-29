<?php

use App\Service\Tools;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary nav-donkey">
  <div class="container">
    <a class="navbar-brand" href="/">Donkey Car</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item <?= Tools::setActive("/"); ?>">
          <a class="nav-link" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item <?= Tools::setActive("vehicle"); ?>">
          <a class="nav-link" href="/vehicle">Liste des vehicules</a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <?php if (isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) : ?>

          <li class="nav-item <?= Tools::setActive("/user/profil"); ?>">
            <a class="nav-link" href="/user/profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/user/logout">Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item <?= Tools::setActive("/user/login"); ?>">
            <a class="nav-link" href="/user/login">Login</a>
          </li>
          <li class="nav-item <?= Tools::setActive("/user/register"); ?>">
            <a class="nav-link" href="/user/register">Register</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<?php include ROOT . '/src/View/parts/_flash.php' ?>
