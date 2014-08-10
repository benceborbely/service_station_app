<form role="form" action="index.php?controller=order&action=order" method="POST">
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" <?php if(isset($email))echo 'value='.$email?> placeholder="Írja be email címét">
  </div>
    <div class="form-group">
    <label for="lastname">Vezetéknév:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" <?php if(isset($lastname))echo 'value='.$lastname?> placeholder="Írja be vezetéknevét">
  </div>
  <div class="form-group">
    <label for="firstname">Keresztnév:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Írja be keresztnevét">
  </div>
    <div class="form-group">
    <label for="telephone">Telefonszám:</label>
    <input type="text" class="form-control" id="telephone" name="telephone" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Írja be telefonszámát">
  </div>
    </div>
    <div class="form-group">
    <label for="make">Gépjármű márka:</label>
    <input type="text" class="form-control" id="make" name="make" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Például: Ford">
  </div>
    </div>
    </div>
    <div class="form-group">
    <label for="model">Gépjármű modell:</label>
    <input type="text" class="form-control" id="model" name="model" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Például: Focus">
  </div>
    </div>
    </div>
    <div class="form-group">
    <label for="number_plate">Rendszám:</label>
    <input type="text" class="form-control" id="number_plate" name="number_plate" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Például: ABC-123">
  </div>
    <div class="form-group">
    <label for="comment">Szolgáltatás:</label><br />
        <input type="checkbox" id="services" name="services[]" value="diagnostic" />Számítógépes diagnosztika<br />
		<input type="checkbox" id="services" name="services[]" value="maintenance" />Szervizelés<br />
		<input type="checkbox" id="services" name="services[]" value="wheel_change" />Kerékcsere<br />
		<input type="checkbox" id="services" name="services[]" value="oil_change" />Olaj, szűrő csere<br />
		<input type="checkbox" id="services" name="services[]" value="other" />Egyéb<br />
  </div>
  
    <div class="form-group">
    <label for="comment">Megjegyzés, észrevétel:</label>
    <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Ide írhatja gépjárművével kapcsolatos észrevételeit."></textarea>
  </div>
  <button name="submit" type="submit" class="btn btn-default">Mentés</button>
</form>
