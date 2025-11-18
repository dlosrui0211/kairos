<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona de pago</title>
        <?php
        include_once 'includes/head-tag-contents.php';
    ?>
</head>
<body>
    <div class="zona-de-pago-pc">
    <?php
    include 'includes/navigation.php';
    ?>
 <div class="carrito2">
    <div class="frame-9">
      <!-- Sección de Productos (Izquierda) - Se mantiene corta y compacta -->
      <div class="frame-5">
        <div class="elemento-carrito">
          <div class="imagen">
            <img class="car-tula" src="car-tula0.png" onerror="this.src='https://placehold.co/55x55/5e3a8b/ffffff?text=P1'" />
          </div>
          <div class="texto">
            <div class="titulo">
              <div class="producto-1">Producto 1</div>
            </div>
            <div class="_99">99$</div>
          </div>
          <div class="botones">
            <div class="_1">1</div>
            <img class="group-4" src="group-40.svg" onerror="this.src='https://placehold.co/14x14/ffffff/1c0538?text=▲'" />
          </div>
          <div class="frame-7">
            <img
              class="trash-streamline-heroicons-outline"
              src="trash-streamline-heroicons-outline0.svg"
              onerror="this.src='https://placehold.co/22x22/ffffff/1c0538?text=T'"
            />
          </div>
        </div>
        <div class="elemento-carrito">
          <div class="imagen">
            <img class="car-tula" src="car-tula1.png" onerror="this.src='https://placehold.co/55x55/5e3a8b/ffffff?text=P2'" />
          </div>
          <div class="texto">
            <div class="titulo">
              <div class="producto-1">Producto 2</div>
            </div>
            <div class="_99">99$</div>
          </div>
          <div class="botones">
            <div class="_1">1</div>
            <img class="group-42" src="group-41.svg" onerror="this.src='https://placehold.co/14x14/ffffff/1c0538?text=▲'" />
          </div>
          <div class="frame-7">
            <img
              class="trash-streamline-heroicons-outline2"
              src="trash-streamline-heroicons-outline1.svg"
              onerror="this.src='https://placehold.co/22x22/ffffff/1c0538?text=T'"
            />
          </div>
        </div>
        <div class="elemento-carrito">
          <div class="imagen">
            <img class="car-tula" src="car-tula2.png" onerror="this.src='https://placehold.co/55x55/5e3a8b/ffffff?text=P3'" />
          </div>
          <div class="texto">
            <div class="titulo">
              <div class="producto-1">Producto 3</div>
            </div>
            <div class="_99">99$</div>
          </div>
          <div class="botones">
            <div class="_1">1</div>
            <img class="group-43" src="group-42.svg" onerror="this.src='https://placehold.co/14x14/ffffff/1c0538?text=▲'" />
          </div>
          <div class="frame-7">
            <img
              class="trash-streamline-heroicons-outline3"
              src="trash-streamline-heroicons-outline2.svg"
              onerror="this.src='https://placehold.co/22x22/ffffff/1c0538?text=T'"
            />
          </div>
        </div>
      </div>
      
      <!-- Resumen del Pedido (Derecha) - Estructura limpia -->
      <div class="frame-25">
        <div class="frame-26">
          
          <!-- Título: Resumen del pedido (Más nítido y alineado a la izquierda) -->
          <div class="resumen-del-pedido">Resumen del pedido</div>
          
          <!-- Fila 1: Subtotal -->
          <div class="frame-28">
            <div class="subtotal-x-productos">Subtotal (X productos)</div>
            <div class="_992">297$</div>
          </div>
          
          <!-- Fila 2: Envío -->
          <div class="frame-29"> <!-- Usando frame-29 para la fila de envío -->
            <div class="env-o-estimado">Envío estimado</div>
            <div class="gratuito">Gratuito</div>
          </div> 
          
          <!-- Fila 3: Devolución - Sin divisor manual, el espacio es manejado por el gap de frame-26 -->
          <div class="frame-30">
            <div class="devoluci-n-gratuita-en-30-d-as">
              Devolución gratuita en 30 días
            </div>
          </div>

          <!-- Fila Final: Total (El divisor lo manejará el CSS con un border-top en total-del-pedido) -->
          <div class="frame-33">
            <div class="total-del-pedido">Total del pedido:</div>
            <div class="_993">297€</div>
          </div>
        </div>
        
        <!-- Botón de Confirmar Pedido -->
        <div class="frame-72">
          <div class="confirmar-pedido">Confirmar pedido</div>
        </div>
      </div>
    </div>
  </div>
      <?php
        include_once 'includes/footer.php';
    ?>
</div>

</body>
</html>