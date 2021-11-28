<h1><?= $this->h1 ?></h1>
<ul>
  <?php foreach ($models as $model) : ?>
    <li>
      <?= $model->name ?>
    </li>
  <?php endforeach ?>
</ul>
