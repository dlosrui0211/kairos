<div class="modal fade cart-modal" id="cartModal" tabindex="-1" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable cart-modal-dialog">
        <div class="modal-content">
            <div class="modal-header drawer-header">
                <h2 class="modal-title drawer-title" id="cartModalLabel">Tu Carrito</h2>
                <button type="button" id="closeCartModal" class="btn-close close-button"
                        data-bs-dismiss="modal" aria-label="Cerrar carrito"></button>
            </div>

            <!-- Contenedor para los productos con ID para JS -->
            <div class="modal-body product-list" id="productList">
            
            <!-- Producto de ejemplo 1 -->
            <div class="card elemento-carrito" data-product-id="1" data-price="99">
                <div class="producto-media d-flex align-items-center">
                    <div class="imagen">
                        <!-- Imagen local del usuario -->
                        <img class="car-tula" src="assets/img/fc26.jpg" alt="EA Sports FC 26">
                    </div>
                    <div class="texto">
                        <div class="producto-1">EA Sports FC 26</div>
                        <div class="_99 product-price">99€</div>
                    </div>
                </div>
                <div class="item-actions d-flex align-items-center">
                    <!-- CONTROL DE CANTIDAD CON FLECHAS (NUEVO) -->
                    <div class="item-quantity d-flex align-items-center">
                        <span class="quantity-display" data-quantity>1</span>
                        <div class="quantity-controls">
                            <button type="button" class="btn quantity-btn increment-btn" aria-label="Aumentar cantidad">▲</button>
                            <button type="button" class="btn quantity-btn decrement-btn" aria-label="Disminuir cantidad">▼</button>
                        </div>
                    </div>
                    <!-- FIN CONTROL DE CANTIDAD -->
                    <button type="button" class="btn trash-icon remove-item-btn" aria-label="Eliminar producto">🗑️</button>
                </div>
            </div>

            <!-- Producto de ejemplo 2 -->
            <div class="card elemento-carrito" data-product-id="2" data-price="49">
                <div class="producto-media d-flex align-items-center">
                    <div class="imagen">
                        <img class="car-tula" src="assets/img/fc26.jpg" alt="God of War">
                    </div>
                    <div class="texto">
                        <div class="producto-1">God of War</div>
                        <div class="_99 product-price">49€</div>
                    </div>
                </div>
                <div class="item-actions d-flex align-items-center">
                    <div class="item-quantity d-flex align-items-center">
                        <span class="quantity-display" data-quantity>2</span>
                        <div class="quantity-controls">
                            <button type="button" class="btn quantity-btn increment-btn" aria-label="Aumentar cantidad">▲</button>
                            <button type="button" class="btn quantity-btn decrement-btn" aria-label="Disminuir cantidad">▼</button>
                        </div>
                    </div>
                    <button type="button" class="btn trash-icon remove-item-btn" aria-label="Eliminar producto">🗑️</button>
                </div>
            </div>

            <!-- Producto de ejemplo 3 -->
            <div class="card elemento-carrito" data-product-id="3" data-price="19">
                <div class="producto-media d-flex align-items-center">
                    <div class="imagen">
                        <img class="car-tula" src="assets/img/fc26.jpg" alt="The Witcher 3">
                    </div>
                    <div class="texto">
                        <div class="producto-1">The Witcher 3</div>
                        <div class="_99 product-price">19€</div>
                    </div>
                </div>
                <div class="item-actions d-flex align-items-center">
                    <div class="item-quantity d-flex align-items-center">
                        <span class="quantity-display" data-quantity>1</span>
                        <div class="quantity-controls">
                            <button type="button" class="btn quantity-btn increment-btn" aria-label="Aumentar cantidad">▲</button>
                            <button type="button" class="btn quantity-btn decrement-btn" aria-label="Disminuir cantidad">▼</button>
                        </div>
                    </div>
                    <button type="button" class="btn trash-icon remove-item-btn" aria-label="Eliminar producto">🗑️</button>
                </div>
            </div>

            </div>
        
            <!-- Pie del modal (Subtotal y Botones) -->
            <div class="modal-footer drawer-footer">
            
                <div class="subtotal-row">
                    <span class="subtotal-text">Subtotal:</span>
                    <span class="subtotal-price" id="subtotalPrice">0€</span>
                </div>

                <div class="action-buttons-container">
                    <a class="btn action-button comprar" href="zonadepago.php">COMPRAR</a>
                    <button type="button" class="btn action-button eliminar" id="removeAllItems">ELIMINAR TODOS</button>
                </div>
            </div>
        </div>
    </div>
</div>