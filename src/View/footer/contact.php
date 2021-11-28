<?php

if (empty($_POST)) {
?>
  <h1><?= $this->h1 ?></h1>

  <form action="#" method="post">

    <div class="form-group container">
      <label for="question" class="col-8">êtes vous :</label>
      <br>
      <br>
      <button type="submit" name="societe" value="oui" class="col-5">une société</button>
      <button type="submit" name="personne" value="oui" class="col-5">une personne</button>
    </div>
  </form>
  <div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
  </div>
<?php }
if (isset($_POST['personne'])) { ?>
  <h1>Formulaire de contact</h1>
  <form action="mail" method="post" class="form-group container">
    <br>
    <div class="col-9">
      <label for="firstname" class="col-2">Entrez votre prénom</label>
      <input type="text" name="firstname" id="firstname" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="lastname" class="col-2">Entrez votre nom</label>
      <input type="text" name="lastname" id="lastname" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="mail" class="col-2">Entrez votre email</label>
      <input type="email" name="mail" id="mail" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="adresse" class="col-2">Entrez votre adresse</label>
      <input type="text" name="adresse" id="adresse" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="sujet" class="col-2">Sujet de votre message</label>
      <input type="text" name="sujet" id="sujet" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="message" class="col-2">Entrez votre message</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button type="submit" name="personne" value="oui">envoyer le message</button>
  </form>
  <br>
  <br>
  <br>

<?php } elseif (isset($_POST['societe'])) { ?>
  <h1>Formulaire de contact</h1>
  <form action="mail" method="post" class="form-group container">
    <br>
    <div class="col-9">
      <label for="raison" class="col-2">Entrez la raison sociale</label>
      <input type="text" name="raison" id="raison" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="mail" class="col-2">Entrez votre email</label>
      <input type="email" name="mail" id="mail" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="adresse" class="col-2">Entrez votre adresse</label>
      <input type="text" name="adresse" id="adresse" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="sujet" class="col-2">Sujet de votre message</label>
      <input type="text" name="sujet" id="sujet" class="col-4">
    </div>
    <br>
    <div class="col-9">
      <label for="message" class="col-2">Entrez votre message</label>
      <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>
    <br>
    <button type="submit" name="societe" value="oui">envoyer le message</button>
  </form>
  <br>
  <br>
  <br>
  <br>
  <br>
<?php } ?>
