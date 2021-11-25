<h1><?=$this->h1?></h1>
<ul>
    <?php foreach ($brands as $brand) : ?>
        <li><a href="brand/show/<?= $brand->id ?>"><?= $brand->name ?></a></li>
    <?php endforeach ?>
</ul>