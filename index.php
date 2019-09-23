<?php

$elArray=[

				0 => [
                'id' => 1,

                'titulo' => "Nombre del Producto",

                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

                'imagen' => 'img/pen2.png',
              ],

        1 => [

                'id' => 2,

                'titulo' => "Nombre del Producto",

                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

                'imagen' => 'img/pen3.png',

              ],
          2 => [

                'id' => 3,

                'titulo' => "Nombre del Producto",

                'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

                'imagen' => 'img/pen.png',

              ],
					3 => [

								'id' => 1,

								'titulo' => "Nombre del Producto",

								'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

								'imagen' => 'img/pen2.png',

							],

					4 => [

								'id' => 2,

								'titulo' => "Nombre del Producto",

								'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

								'imagen' => 'img/pen3.png',

										],
					5 => [

								'id' => 3,

								'titulo' => "Nombre del Producto",

								'descripcion' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut recusandae eaque debitis sint necessitatibus, officia ex.',

								'imagen' => 'img/pen.png',

								]
];
?>

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
              <button type="button" class="btn btn-secondary">NOVEDADES</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          BOLÍGRAFOS</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Plásticos</a>
                  <a class="dropdown-item" href="#">Metálicos</a>
                  <a class="dropdown-item" href="#">Ecológicos</a>
                  <a class="dropdown-item" href="#">Touch</a>
                  <a class="dropdown-item" href="#">Madera</a>
                  <a class="dropdown-item" href="#">Cross</a>
                </div>
              </div>
              <button type="button" class="btn btn-secondary">LÁPICES</button>
              <button type="button" class="btn btn-secondary">ECOLÓGICOS</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">OFICINA Y NEGOCIOS</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Carpetas / Portfolios</a>
                  <a class="dropdown-item" href="#">Anotadores / Cuadernos</a>
                  <a class="dropdown-item" href="#">Calendarios</a>
                  <a class="dropdown-item" href="#">Mouse Pad</a>
                </div>
              </div>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOGAR Y TIEMPO LIBRE</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Asado</a>
                  <a class="dropdown-item" href="#">Herramientas</a>
                  <a class="dropdown-item" href="#">Juegos</a>
                  <a class="dropdown-item" href="#">Viajes</a>
                  <a class="dropdown-item" href="#">Varios</a>
                </div>
              </div>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">TECNOLOGÍA</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Accesorios Celulares</a>
                  <a class="dropdown-item" href="#">Cargadores - Power Bank</a>
                  <a class="dropdown-item" href="#">Parlantes - Auriculares</a>
                </div>
              </div>
              <button type="button" class="btn btn-secondary">PEN DRIVES</button>
              <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MARROQUINERÍA</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Mochilas</a>
                  <a class="dropdown-item" href="#">Bolsos</a>
                  <a class="dropdown-item" href="#">Maletines</a>
                  <a class="dropdown-item" href="#">Bolsos Térmicos</a>
                  <a class="dropdown-item" href="#">Valijas</a>
                  <a class="dropdown-item" href="#">Bolsas</a>
                  <a class="dropdown-item" href="#">Varios</a>
                </div>
                </div>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    BEBIDAS Y TÉRMICOS
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Botellas Deportivas</a>
                  <a class="dropdown-item" href="#">Tazas - Vasos</a>
                  <a class="dropdown-item" href="#">Mates</a>
                  <a class="dropdown-item" href="#">Sets de Vinos</a>
                  </div>
                </div>
                <button type="button" class="btn btn-secondary">PRODUCTOS DE DISEÑO</button>
                <button type="button" class="btn btn-secondary">GORROS</button>
                <button type="button" class="btn btn-secondary">LLAVEROS</button>
                <button type="button" class="btn btn-secondary">PARAGUAS</button>
                <button type="button" class="btn btn-secondary">SALUD Y CUIDADO PERSONAL</button>
                <button type="button" class="btn btn-secondary">RELOJES Y CALCULADORAS</button>
                <button type="button" class="btn btn-secondary">PVC - SOLDADURA PLÁSTICA</button>
                <button type="button" class="btn btn-secondary">IMPRESIONES</button>
                <button type="button" class="btn btn-secondary">TEXTIL</button>
                <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MARCAS</button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="#">Wagner</a>
                  <a class="dropdown-item" href="#">Cross</a>
                  <a class="dropdown-item" href="#">Senator</a>
                  <a class="dropdown-item" href="#">Narda Lepes</a>
                  <a class="dropdown-item" href="#">LaBaule</a>
                  <a class="dropdown-item" href="#">Pampero</a>
                  <a class="dropdown-item" href="#">Slazenger</a>
                  <a class="dropdown-item" href="#">Swiss Peak</a>
                  <a class="dropdown-item" href="#">Moleskine</a>
                  <a class="dropdown-item" href="#">Pierre cardin</a>
                  <a class="dropdown-item" href="#">Fast Travel</a>
                </div>
              </div>
            </div>
          </aside>

<!-- Productos a la venta -->
          <section class="col-12 col-sm-12 col-md-9">
            <div class="row">
              <?php foreach ($elArray as $numArticulo => $articulos) :?>
                <div class="card venta col-12 col-sm-6 col-md-3 tarjetasSinborde" style="">
                  <img src="<?=$articulos['imagen'];?>" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title"><?=$articulos['titulo'];?></h5>
                    <p class="card-text"><?=$articulos['descripcion'];?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                  </div>
                </div>
              <?php endforeach; ?>
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
