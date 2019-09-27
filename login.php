<?PHP
session_start();

require ("recursos/funciones.php");

if($_POST){
  if(verificaYcomparaJSON($_POST['email'],$_POST['password']))
  {
    header('location: index.php');
  }else{
    $mensajeError='Alguno de los campos es incorrecto.';
  }
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("recursos/head.php"); ?>

  <body>
    <div class="contaniner-fluid">
        <div class="row">
<!-- barra de navegacion -->
          <?php include("recursos/header.php"); ?>
<!-- Login -->
        <section class="limitesLogin fondoLogin p-5">
          <h1 class="h1-faq">INGRESAR</h1>
          <form method='post'>
            <div class="form-group " >
              <label for="exampleInputEmail1">Email</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=
              "Email">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Contraseña</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <p><?= $mensajeError ?? '' ?></p>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary-login botonFormulario">INGRESAR</button>
            <small id="emailHelp" class="form-text text-muted">NO SOS UN USUARIO REGISTRADO?</small>
            <button type="submit" class="btn btn-primary-login botonFormulario">REGISTRATE</button>
          </form>
        </section>
      </main>

      <?php include("recursos/footer.php"); ?>
    </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
