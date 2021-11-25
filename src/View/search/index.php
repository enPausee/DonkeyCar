<h1><?=$this->h1?></h1>

<form action="#" method="post">


    <div class="container-fluid">
        <label for="date">Sélectionnnez vos date de location</label>
        <input id="date" class="flatpickr" type="date" name="dateDebut">
        <input type="time" name="timeDebut" id="date">
        <input id="date" class="flatpickr2" type="date" name="dateFin">
        <input type="time" name="timeFin" id="date">
    </div>
    <br>
    <div>
        <button type="submit" name="valide" value="valide">valider</button>
    </div>
</form>
<script src=" https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="/js/script.js"></script>