<div class="page-cart">
  <div class="container">
    <h1><?= $this->h1 ?></h1>
    <div class="container">
      <table class="table table-responsive-md ">
        <thead>
          <tr>
            <th scope="col">Véhicule</th>
            <th scope="col">Prix Journalier</th>
            <th scope="col">Date start</th>
            <th scope="col">Date end</th>
            <th scope="col">Extra</th>
            <th scope="col">Prix total</th>
            <th scope="col">Prix total TTC</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">
              <div>
                <img src="../../picture/chiron.png" width="200" height="200" alt="vehicle's image">
                <p>marque model</p>
              </div>
            </th>
            <td>40 €</td>
            <td>2020-11-10</td>
            <td>2020-12-14</td>
            <td>
              <ul class="list-group">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
                <li class="list-group-item">A fourth item</li>
                <li class="list-group-item">And a fifth one</li>
              </ul>
            </td>
            <td>100€</td>
            <td>120€</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="5" style="text-align: right;font-weight:bold">
              TOTAL
            </td>
            <td>100€</td>
            <td>120€</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
