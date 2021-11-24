
    <form action="/search/searchShow" method="post">
        <div>
            <label for="category">Choissisez votre catégorie de véhicule</label>
            <select name="category">
                <?php foreach ($categories as $category): ?>
                <option value="<?=$category->id?>">
                    <?=$category->name?>
                </option>
                <?php endforeach?>
            </select>
        </div>
        <br>
        <div>
            <label for="brand">Choissisez votre marque de véhicule</label>
            <select name="brand">
                <?php foreach ($brands as $brand): ?>
                <option value="<?=$brand->id?>"><?=$brand->name?></option>
                <?php endforeach?>
            </select>
        </div>
        <br>
        <div>
            <label for="model">Choissisez votre modéle de véhicule</label>
            <select name="model">
                <?php foreach ($models as $model): ?>
                <option value="<?=$model->id?>">
                    <?=$model->name?>
                </option>
                <?php endforeach?>
            </select>
        </div>
        <br>
        <div>
            <label for="datedebut">Sélectionnnez vos date de location</label>
            <input class="flatpickr" type="date" name="dateLocation">
        </div>
        <br>
        <div>
            <button type="submit" name="valide" value="valide">valider</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="/js/script.js"></script>

