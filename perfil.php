<?php
session_start();
// var_dump($_FILES);
// $nombre=$_FILES['imagen']['name'];
// $ext=pathinfo($nombre,PATHINFO_EXTENSION);
// if($ext=='jpg' || $ext=='jpeg'||$ext=='png') {
//   $archivo=$_FILES['imagen']['tmp_name'];
//   move_uploaded_file($archivo,"archivos/img." . $ext);
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("recursos/head.php");?>
  <body>
    <div class="contaniner-fluid">
      <div class="row">
<!-- barra de navegacion -->
          <?php include("recursos/header.php");?>
          <main class="col-12">
            <section class="esiloPerfil">
              <h2 class="h1-faq">Mis datos</h2>
              <div class="row">
                <div class="col-12 col-sm-6 col-md-6">
                  <div class="media mx-3">
                    <div class="media-body">
                      <h3>Nombre</h3>
                      <p><?=$_SESSION['name']?></p>
                      <h3>Apellido</h3>
                      <p><?=$_SESSION['apellido']?></p>
                      <h3>Email</h3>
                      <p><?=$_SESSION['email']?></p>
                      <h3>¿Quiere subir una foto?</h3>
                    </div>
                  </div>
                  <form class="" action="perfil.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="imagen" value="">
                    <input type="submit" name="" value="Enviar">
                  </form>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                  <img src="img/perfil-foto.jpg" class=" circle" alt="">
                  <a href="#">Editar foto</a>
                </div>
              </div>
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
