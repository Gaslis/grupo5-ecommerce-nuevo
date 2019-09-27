<?php
session_start();
var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("recursos/head.php");?>
  <body>
    <div class="contaniner-fluid">
      <div class="row">
<!-- barra de navegacion -->
          <?php include("recursos/header.php");?>
          <main>
            <section class="limitesFormu fondoRegistrate p-4">
              <h2>Tus datos</h2>
              <h3>Nombre</h3>
              <p><?=$_SESSION['name']?></p>
              <h3>Apellido</h3>
              <p><?=$_SESSION['apellido']?></p>
              <h3>Email</h3>
              <p><?=$_SESSION['email']?></p>

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
