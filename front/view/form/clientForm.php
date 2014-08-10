<form role="form" action="index.php?controller=client&action=save" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" name="email" <?php if(isset($email))echo 'value='.$email?> placeholder="Írja be email címét">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Vezetéknév:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" <?php if(isset($lastname))echo 'value='.$lastname?> placeholder="Írja be vezetéknevét">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keresztnév:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" <?php if(isset($firstname))echo 'value='.$firstname?> placeholder="Írja be keresztnevét">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefonszám:</label>
    <input type="text" class="form-control" id="phone_number" name="phone_number" <?php if(isset($phone_number))echo 'value='.$phone_number?> placeholder="Írja be telefonszámát">
  </div>
  <button name="submit" type="submit" class="btn btn-default">Mentés</button>
</form>
