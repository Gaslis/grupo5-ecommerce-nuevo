<?PHP
session_start();

require ("recursos/funciones.php");

$usuario=[];
$errors = [];

if($_POST){
  $usuario = [
    'name' => $_POST['name'],
    'apellido' => $_POST['apellido'],
    'email' => $_POST['email'],
    'password' => $_POST['password']
  ];
  if (is_email($usuario['email'])) {
    $errors['email'] = 'El email no es valido';
  }
  if (min_chars($usuario['apellido'], 3)) {
    $errors['apellido'] = 'El nombre debe tener al menos 3 caracteres';
  }
  if (min_chars($usuario['name'], 3)) {
    $errors['name'] = 'El nombre debe tener al menos 3 caracteres';
  }
  if (strlen($usuario['password']) < 8) {
    $errors['password'] = 'El password debe tener al menos 8 caracteres';
  }
  if ($usuario['password']!=$_POST['confirmar']){
    $errors['password'] = 'El password no coincide';
  }
  if(empty($errors)) {
    $usuario['password'] = password_hash($usuario['password'], PASSWORD_DEFAULT);
    subirUsuario($usuario);
    header('location: login.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("recursos/head.php"); ?>
  <body>
    <div class="contaniner-fluid">

<!-- barra de navegacion -->
        <div class="row">
          <?php include("recursos/header.php"); ?>

<!-- Cuerpo principal del sitio -->
      <section class="limitesFormu fondoRegistrate" >
        <h1 class="h1-faq  pt-5">REGISTRATE</h1>
        <form class="m-5 py-3" method='post' novalidate>

            <div class="form-group">
              <label for="formGroupExampleInput"></label>
              <input type="text" class="form-control" id="formGroupExampleInput" name='name' placeholder="Nombre" value="<?= $usuario['name'] ?? '' ?>">
              <p><?= $errors['name'] ?? '' ?></p>
            </div>
            <div class="form-group">
              <label for="formGroupExampleInput2"></label>
              <input type="text" class="form-control" id="formGroupExampleInput2" name='apellido' placeholder="Apellido" value="<?= $usuario['apellido'] ?? '' ?>">
              <p><?= $errors['apellido'] ?? '' ?></p>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1"></label>
              <input type="email" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="<?= $usuario['email'] ?? '' ?>">
              <p><?= $errors['email'] ?? '' ?></p>
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="password" name='password' class="form-control" id="exampleInputPassword1" placeholder="Password   --debe tener al menos 8 caracteres--">
              <p><?= $errors['password'] ?? '' ?></p>
            </div>
            <!-- <div class="form-group">
              <label for="formGroupExampleInput"></label>
              <input type="tel" class="form-control" id="formGroupExampleInput" placeholder="Telefeno">
            </div> -->
            <div class="form-group">
              <label for="exampleInputPassword1"></label>
              <input type="password" name='confirmar' class="form-control" id="exampleInputPassword1" placeholder="Repita el password">
              <p><?= $errors['confirmar'] ?? '' ?></p>
            </div>
          <!-- <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
            <button type="submit" class="btn btn-primary botonFormulario">Enviar</button>
          </form>
        </section>
        <?php include("recursos/footer.php"); ?>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
