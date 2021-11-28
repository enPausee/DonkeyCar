<h1><?= $this->h1 ?></h1>
<ul>
  <?php foreach ($categories as $category) : ?>
    <li>
      <?= $category->name ?>
    </li>
  <?php endforeach ?>
</ul>
