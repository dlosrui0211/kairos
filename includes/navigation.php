<nav class="navbar navbar-expand-lg kairos-header fixed-top" id="mainNav">
    <div class="container kairos-header-container">
        <a class="navbar-brand kairos-logo" href="index.php">
            <img src="assets/img/logo150.png" alt="Kairos Logo">
        </a>

        <button class="navbar-toggler kairos-navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Abrir navegacion">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse kairos-navbar-collapse" id="navbarResponsive">
            <div class="kairos-bar d-flex align-items-center">
                <div class="kairos-menu-wrapper nav-item dropdown">
                    <button class="btn kairos-menu-btn dropdown-toggle" type="button"
                            id="kairosMenuDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                    </button>

                    <ul class="dropdown-menu kairos-menu-dropdown" aria-labelledby="kairosMenuDropdown">
                        <li><a class="dropdown-item" href="plataformas.php">Ver todas las plataformas</a></li>
                        <li><a class="dropdown-item" href="steam.php">Steam</a></li>
                        <li><a class="dropdown-item" href="playstation.php">PlayStation</a></li>
                        <li><a class="dropdown-item" href="xbox.php">Xbox</a></li>
                        <li><a class="dropdown-item" href="nintendo.php">Nintendo</a></li>
                    </ul>
                </div>

                <form class="kairos-search d-flex" role="search">
                    <input class="form-control" type="search" placeholder="Busca tus juegos favoritos..."
                           aria-label="Buscar juegos">
                </form>

                <button class="btn kairos-search-btn" type="button" aria-label="Buscar">
                    <i class="fas fa-search"></i>
                </button>
            </div>

            <div class="navbar-nav kairos-actions-bar flex-row">
                <a class="nav-link btn kairos-action-btn" href="login.php" aria-label="Login">
                    <i class="fas fa-user"></i>
                </a>
                <a class="nav-link btn kairos-action-btn" href="wishlist.php" aria-label="Wishlist">
                    <i class="fas fa-star"></i>
                </a>
                <button class="nav-link btn kairos-action-btn" id="openCartModal" type="button" aria-label="Carrito">
                    <i class="fas fa-shopping-cart"></i>
                </button>
                <a class="nav-link btn kairos-action-btn" href="recibos.php" aria-label="Recibos">
                    <i class="fas fa-receipt"></i>
                </a>
                <a class="nav-link btn kairos-action-btn" href="devoluciones.php" aria-label="Devoluciones">
                    <i class="fas fa-box-open"></i>
                </a>
            </div>
        </div>
    </div>
</nav>