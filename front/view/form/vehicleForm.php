<form role="form" action="index.php?controller=index&action=signin" method="POST">
  <div class="form-group">
    <label for="make">Márka:</label>
    <input type="email" class="form-control" id="make" name="make" placeholder="Például: Ford">
  </div>
    <div class="form-group">
    <label for="model">Modell:</label>
    <input type="text" class="form-control" id="model" name="model" placeholder="Például: Focus">
  </div>
  <div class="form-group">
    <label for="vintage">Évjárat:</label>
    <input type="text" class="form-control" id="vintage" name="vintage" maxlength="4" size="4">
  </div>
  <div class="form-group">
    <label for="number_plate">Rendszám:</label>
    <input type="text" class="form-control" id="number_plate" name="number_plate" placeholder="Például: ABC-123">
  </div>
  <button name="submit" type="submit" class="btn btn-default">Mentés</button>
</form>
