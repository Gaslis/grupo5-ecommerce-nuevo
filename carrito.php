<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include("head.php"); ?>
  <body>
    <div class="contaniner-fluid">
        <!-- barra de navegacion -->
      <div class="row">
        <?php include("header.php"); ?>

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



             <section class="col-12 col-sm-12 col-md-9 mt-5">
                <div class="row">
                  <div class="panel panel-default">

                    <div class="panel-heading">Detalle del Carrito de Pedidos</div>
                    <div class="panel-body" id="ec-cart-list-container">

                		<table class="table table-bordered table-striped margin-no">
                			<thead>
                				<tr>
                  				<th width="30%" colspan="2">Item</th>
                  				<th width="10%">Cantidad</th>
                  				<th width="10%">Color</th><th width="10%">Precio de Lista (unitario)</th>
                  			  <th width="10%">Descuento</th>
                  			  <th width="10%">Precio Final (unitario)</th>
                  			  <th width="15%">Subtotal</th><th width="15%">Acciones</th>
                				</tr>
                			</thead>
                			<tbody>
                				<tr id="item_678">
                			<td width="60"><img src="https://www.zecat.com.ar/AR/gt/upload/ec/products/60554/efebd0bb-d721-4b1a-82b1-156f05c1053d.jpg" alt="Toilet Bag Baden" class="img-responsive"></td>
                			<th scope="row" id="title_678">Toilet Bag Baden</th>
                			<td align="center">
                				<input id="min_amount_678" type="hidden" value="50">
                				<input id="quantity_678" min="50" type="number" value="50"
                				class="form-control input-height" onchange="javascript:ecCartChange(678,'2fbb8bb9172224789ca6eb1ebc2c2bff476a272f','https://www.zecat.com.ar/AR/es/api/json');">
                			</td>
                			<td align="center">
                			<input type="hidden" id="color_678" value="000000">
                			<div style="background-color:#000000;" class="color" data-toggle="tooltip" title="" data-original-title="Negro"></div>
                			</td><td id="price_678">$--</td>
                				<td id="discount_678">--%</td>
                				<td id="final_price_678">$--</td>
                				<td id="subtotal_678">$--</td>
                				<td align="center">
                			<a id="deleteBtn_678" ec-uniqid="2fbb8bb9172224789ca6eb1ebc2c2bff476a272f" ec-urlapi="https://www.zecat.com.ar/AR/es/api/json" href="javascript:gtConfirm( '¿Está seguro de que desea eliminar este item?', 'ecCartDelete(678);' );"
                			class="btn btn-primary btn-xs">
                			<i class="fa fa-trash"></i> Borrar Item</a></td>
                			</tr><tr id="item_66">
                			<td width="60"><img src="https://www.zecat.com.ar/AR/gt/upload/ec/products/60554/901960e4c31a1485977c588abc27b1a245fb6480.jpg" alt="Calculadora Silver - CA 118" class="img-responsive"></td>
                			<th scope="row" id="title_66">Calculadora Silver - CA 118</th>
                			<td align="center">
                				<input id="min_amount_66" type="hidden" value="300">
                				<input id="quantity_66" min="300" type="number" value="300"
                				class="form-control input-height" onchange="javascript:ecCartChange(66,'6565bedbe320f63b6162aa3c1419349b2b417538','https://www.zecat.com.ar/AR/es/api/json');">
                			</td>
                			<td align="center">
                			<input type="hidden" id="color_66" value="f7f7f7">
                			<div style="background-color:#f7f7f7;" class="color" data-toggle="tooltip" title="" data-original-title="Blanco"></div>
                			</td><td id="price_66">$--</td>
                				<td id="discount_66">--%</td>
                				<td id="final_price_66">$--</td>
                				<td id="subtotal_66">$--</td>
                				<td align="center">
                			<a id="deleteBtn_66" ec-uniqid="6565bedbe320f63b6162aa3c1419349b2b417538" ec-urlapi="https://www.zecat.com.ar/AR/es/api/json" href="javascript:gtConfirm( '¿Está seguro de que desea eliminar este item?', 'ecCartDelete(66);' );"
                			class="btn btn-primary btn-xs">
                			<i class="fa fa-trash"></i> Borrar Item</a></td>
                			</tr><tr id="item_419">
                			<td width="60"><img src="https://www.zecat.com.ar/AR/gt/upload/ec/products/60554/419.jpg" alt="Llavero cortaplumas HRR 312" class="img-responsive"></td>
                			<th scope="row" id="title_419">Llavero cortaplumas HRR 312</th>
                			<td align="center">
                				<input id="min_amount_419" type="hidden" value="300">
                				<input id="quantity_419" min="300" type="number" value="300"
                				class="form-control input-height" onchange="javascript:ecCartChange(419,'7225e4229237e95ff8a24f304e46a70c2b314303','https://www.zecat.com.ar/AR/es/api/json');">
                			</td>
                			<td align="center">
                			<input type="hidden" id="color_419" value="d6d6d6">
                			<div style="background-color:#d6d6d6;" class="color" data-toggle="tooltip" title="" data-original-title="Plata"></div>
                			</td><td id="price_419">$--</td>
                				<td id="discount_419">--%</td>
                				<td id="final_price_419">$--</td>
                				<td id="subtotal_419">$--</td>
                				<td align="center">
                			<a id="deleteBtn_419" ec-uniqid="7225e4229237e95ff8a24f304e46a70c2b314303" ec-urlapi="https://www.zecat.com.ar/AR/es/api/json" href="javascript:gtConfirm( '¿Está seguro de que desea eliminar este item?', 'ecCartDelete(419);' );"
                			class="btn btn-primary btn-xs">
                			<i class="fa fa-trash"></i> Borrar Item</a></td>
                			</tr><tr>
                            <td colspan="7"><strong id="total">Total</strong></td>
                            <td><strong id="ec-cart-detail-total">$0.00</strong></td>
                            <td></td>
                          </tr>
                			</tbody>
                		</table>      <small><small>*los precios no incluyen IVA</small></small>
                    </div>
                    <div class="panel-footer align-right">
                      <a class="btn btn-default" href="https://www.zecat.com.ar/AR/es/products"><i class="fa fa-chevron-left"></i> Volver</a>

                      <button class="btn btn-primary" urlapi="https://www.zecat.com.ar/AR/es/api/json" onclick="gtConfirm('¿Estás seguro de que deseas vaciar el carrito?', 'ecEmptyCart(1);' );" ><i class="fa fa-times"></i> Vaciar carrito</button>


        </main>
        <?php include("footer.php"); ?>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
