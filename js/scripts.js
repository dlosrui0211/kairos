
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
    // Usamos un selector para encontrar el botón del carrito en el navbar
    const openButton = document.getElementById('openCartModal'); 
    const closeButton = document.getElementById('closeCartModal');
    const productList = document.getElementById('productList');
    const subtotalElement = document.getElementById('subtotalPrice');
    const removeAllButton = document.getElementById('removeAllItems');

    // --- Funciones del Drawer ---
    function openDrawer() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden'; // Evita el scroll de fondo
    }

    function closeDrawer() {
        modal.classList.remove('active');
        // Usamos un pequeño retraso para permitir que termine la animación CSS
        setTimeout(() => {
            modal.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    if (openButton) {
        openButton.addEventListener('click', () => {
            modal.style.display = 'block'; // Asegura que esté visible antes de la animación
            updateSubtotal();
            requestAnimationFrame(openDrawer);
        });
    }

    if (closeButton) {
        closeButton.addEventListener('click', closeDrawer);
    }

    // Cerrar al hacer clic en el fondo oscuro
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            closeDrawer();
        }
    });

    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if ((e.key === "Escape" || e.key === "Esc") && modal && modal.classList.contains('active')) {
            closeDrawer();
        }
    });


    // --- Lógica de Cantidad y Carrito ---

    // Función para recalcular el subtotal
    function updateSubtotal() {
        let total = 0;
        const items = productList.querySelectorAll('.elemento-carrito');
        
        items.forEach(item => {
            const price = parseFloat(item.getAttribute('data-price'));
            // Busca el elemento de cantidad
            const quantityDisplay = item.querySelector('[data-quantity]');
            const quantity = parseInt(quantityDisplay.textContent, 10);
            
            if (!isNaN(price) && !isNaN(quantity)) {
                total += price * quantity;
            }
        });

        subtotalElement.textContent = `${total}€`;
    }

    // Manejador de eventos delegado para botones de cantidad y eliminar
    productList.addEventListener('click', function(event) {
        const target = event.target;
        const item = target.closest('.elemento-carrito');
        
        if (!item) return;

        const quantityDisplay = item.querySelector('[data-quantity]');
        
        // Verifica que el display de cantidad exista antes de continuar
        if (!quantityDisplay) return; 
        
        let currentQuantity = parseInt(quantityDisplay.textContent, 10);

        // Aumentar cantidad (▲)
        if (target.classList.contains('increment-btn')) {
            currentQuantity++;
            quantityDisplay.textContent = currentQuantity;
            updateSubtotal();
        } 
        // Disminuir cantidad (▼)
        else if (target.classList.contains('decrement-btn')) {
            if (currentQuantity > 1) {
                currentQuantity--;
                quantityDisplay.textContent = currentQuantity;
                updateSubtotal();
            } else if (currentQuantity === 1) {
                 // Opción: Al disminuir de 1, eliminar el elemento
                item.remove();
                updateSubtotal();
            }
        } 
        // Eliminar producto (🗑️)
        else if (target.classList.contains('remove-item-btn')) {
            item.remove();
            updateSubtotal();
        }
    });

    // Eliminar todos los productos
    if (removeAllButton) {
        removeAllButton.addEventListener('click', () => {
            productList.innerHTML = ''; 
            updateSubtotal();
        });
    }

    // Inicializar subtotal si hay elementos al cargar
    updateSubtotal();
});