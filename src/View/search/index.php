<h1><?=$this->h1?></h1>

<form action="search/searchShow" method="post" onsubmit="getValue(false);">


    <div class="container">
        <label>From Date</label>
        <input type="date" name="" max="" id="fromDate">
        <br><br>
        <label>To Date</label>
        <input type="date" name="" min="" id="toDate">
    </div>
    <br>
    <div>
        <button type="submit" name="valide" value="valide">valider</button>
    </div>
</form>
<script src=" https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="/js/script.js"></script>