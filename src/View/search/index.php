<form action="/search/searchShow" method="post">
  <div>
    <label for="category">Choissisez votre catégorie de véhicule</label>
    <select name="category">
      <?php foreach ($categories as $category) : ?>
        <option value="<?= $category->id ?>">
          <?= $category->name ?>
        </option>
      <?php endforeach ?>
    </select>
  </div>
  <br>
  <div>
    <label for="brand">Choissisez votre marque de véhicule</label>
    <select name="brand">
      <?php foreach ($brands as $brand) : ?>
        <option value="<?= $brand->id ?>"><?= $brand->name ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <br>
  <div>
    <label for="model">Choissisez votre modéle de véhicule</label>
    <select name="model">
      <?php foreach ($models as $model) : ?>
        <option value="<?= $model->id ?>">
          <?= $model->name ?>
        </option>
      <?php endforeach ?>
    </select>
  </div>
  <br>
  <div>
    <label for="datedebut">Sélectionnez votre date de début de location</label>
    <input type="date" name="dateDebut">
  </div>
  <br>
  <div>
    <label for="dateFin">Sélectionnez votre date de fin de location</label>
    <input type="date" name="dateFin">

    <button type="submit" name="valide" value="valide">valider</button>
  </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
