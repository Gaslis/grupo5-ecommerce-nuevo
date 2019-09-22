<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include("recursos/head.php");?>
  <body>
    <div class="contaniner-fluid">
        <!-- barra de navegacion -->
        <div class="row">
          <?php include("recursos/header.php");?>

          <!-- Carrusel de imagenes -->
      <section class="carouselMedia posi">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner alturaBanner bordeRedondo">
            <div class="carousel-item active">
              <img src="img/banner-fino1.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner-ar-nuevos-brazaletes-T407-T433.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/banner-ar-T468-T476.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </section>

<!-- menu izquierda -->
      <main class="row pl-5 pr-5">
        <aside class="col-sm-3 col-md-3 mt-5">
          <div class="btn-group-vertical" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-secondary">Novedades</button>
            <button type="button" class="btn btn-secondary">Lápices</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Boligrafos
                </button>
                  <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                    <a class="dropdown-item" href="#">Plásticos</a>
                    <a class="dropdown-item" href="#">Metálicos</a>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary">Novedades</button>
                <button type="button" class="btn btn-secondary">Lápices</button>
                <button type="button" class="btn btn-secondary">Novedades</button>
                <button type="button" class="btn btn-secondary">Lápices</button>
                <div class="btn-group" role="group">
                  <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Boligrafos
                  </button>
                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                      <a class="dropdown-item" href="#">Plásticos</a>
                      <a class="dropdown-item" href="#">Metálicos</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-secondary">Lápices</button>
                  <button type="button" class="btn btn-secondary">Novedades</button>
              </div>
          </aside>

<!-- Productos a la venta -->
          <section class="col-12 col-sm-12 col-md-9">
            <div class="row">
              <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                <img src="img/pen.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                <img src="img/pen2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
              <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                <img src="img/pen3.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
                </div>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="img/pen.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="img/pen2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="img/pen3.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="img/pen.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="img/pen2.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              </div>
            </section>

<!-- segundo banner -->
        <section>

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
