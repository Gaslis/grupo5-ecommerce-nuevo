<header>
  <nav class="col 12 navbar navbar-light p-3">
    <div class="col-3 col-sm-4 col-md-3">
      <a href="index.php">
        <img src="img/logo-graficar.png" alt="" class="logo">
        <img src="img/logo-circulo.png" alt="" class="logoCirculo">
    </a>
  </div>
  <div class="col-5 col-sm-5 col-md-8 mb-3">
    <form class="pt-3" action="index.php" method="post">
      <div class="input-group">
        <input type="text" class="form-control searchRedondo" name="" value="" placeholder="Encontra los productos que estas buscando...">
      <!-- <div class="input-group-prepend">
        <span class="input-group-text searchRedondo" id="addon-wrapping"><ion-icon name="search"></ion-icon></span>
      </div> Encontra los productos que estas buscando...-->
      </div>
    </form>
  </div>
  <div class="col-4 col-sm-3 col-md-1">
    <button type="submit" class="btn btn-primary botonMenu menuMedia">☰</button>
    <a href="carrito.php">
      <button type="submit" class="btn btn-primary botonChango"><ion-icon name="cart"></ion-icon></button>
    </a>
  </div>
</nav>
<div class="row barraRoja py-1">
  <nav class="col-6 primerNav">
    <a href="mailto: info@graficar.com.ar"><ion-icon name="mail"></ion-icon> contacto@graficar.com</a>
    <a href="contacto-consulta.php"><ion-icon name="call"></ion-icon> (011) 15 4054 6753</a>
  </nav>
  <nav class="col-6 segundoNav">
    <?php if(empty($_SESSION)): ?>
      <a href="login.php">Ingresá  <ion-icon name="person"></ion-icon></a>
      <a href="formularioRegistro.php">Registrate  <ion-icon name="create"></ion-icon></a>
    <?php else: ?>
      <a href="perfil.php"><?=$_SESSION['name']?>  <ion-icon name="person"></ion-icon></a>
      <a href="logout.php">Logout  <ion-icon name="exit"></ion-icon></a>
  <?php endif; ?>
  </nav>
</div>
</div>
</header>
