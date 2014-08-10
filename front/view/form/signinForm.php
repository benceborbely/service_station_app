<form role="form" action="index.php?controller=index&action=signin" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email:</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Írja be email címét">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Jelszó:</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Írja be jelszavát">
  </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Jelszó mégegyszer:</label>
    <input type="password" class="form-control" id="password2" name="password2" placeholder="Írja be jelszavát mégegyszer">
  </div>
    <div class="form-group">
    <label for="exampleInputEmail1">Vezetéknév:</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Írja be vezetéknevét">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Keresztnév:</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="Írja be keresztnevét">
  </div>
  <button name="submit" type="submit" class="btn btn-default">Regisztráció</button>
</form>
