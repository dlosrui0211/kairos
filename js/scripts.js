//
// Poner aquí los scripts 
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    
    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('cartModal');
    const openButton = document.getElementById('openCartModal'); 
    const productList = document.getElementById('productList');
    const subtotalElement = document.getElementById('subtotalPrice');
    const removeAllButton = document.getElementById('removeAllItems');

    if (openButton) {
        openButton.addEventListener('click', () => {
            updateSubtotal();
            bootstrap.Modal.getOrCreateInstance(modal).show();
        });
    }

    // --- Lógica de Cantidad y Carrito ---

    function formatPrice(value) {
        return `${Number.isInteger(value) ? value : value.toFixed(2)}€`;
    }

    function updateItemPrice(item, price, quantity) {
        const priceElement = item.querySelector('.product-price');

        if (priceElement) {
            priceElement.textContent = formatPrice(price * quantity);
        }
    }

    function updateSubtotal() {
        if (!productList || !subtotalElement) return;

        let total = 0;
        const items = productList.querySelectorAll('.elemento-carrito');
        
        items.forEach(item => {
            const price = parseFloat(item.getAttribute('data-price'));
            const quantityDisplay = item.querySelector('[data-quantity]');
            const quantity = parseInt(quantityDisplay.textContent, 10);
            
            if (!isNaN(price) && !isNaN(quantity)) {
                updateItemPrice(item, price, quantity);
                total += price * quantity;
            }
        });

        subtotalElement.textContent = formatPrice(total);
    }

    if (productList) {
        productList.addEventListener('click', function(event) {
            const target = event.target;
            const item = target.closest('.elemento-carrito');
            
            if (!item) return;

            const quantityDisplay = item.querySelector('[data-quantity]');
            if (!quantityDisplay) return; 
            
            let currentQuantity = parseInt(quantityDisplay.textContent, 10);

            if (target.classList.contains('increment-btn')) {
                currentQuantity++;
                quantityDisplay.textContent = currentQuantity;
                updateSubtotal();

            } else if (target.classList.contains('decrement-btn')) {
                if (currentQuantity > 1) {
                    currentQuantity--;
                    quantityDisplay.textContent = currentQuantity;
                    updateSubtotal();
                } else if (currentQuantity === 1) {
                    item.remove();
                    updateSubtotal();
                }

            } else if (target.classList.contains('remove-item-btn')) {
                item.remove();
                updateSubtotal();
            }
        });
    }

    if (removeAllButton) {
        removeAllButton.addEventListener('click', () => {
            productList.innerHTML = ''; 
            updateSubtotal();
        });
    }

    updateSubtotal();


    // 🗑️ --- ELIMINACIÓN DE RECIBOS (SIN PHP, ANIMADO) ---
    const botonesEliminarRecibo = document.querySelectorAll(".eliminar-recibo");

    botonesEliminarRecibo.forEach(boton => {
        boton.addEventListener("click", () => {
            const tarjeta = boton.closest(".tarjeta-recibo");
            tarjeta.classList.add("eliminando");

            setTimeout(() => {
                tarjeta.remove();
            }, 300);
        });
    });

});
