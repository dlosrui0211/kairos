<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Plataformas</title>
    <?php include_once 'includes/head-tag-contents.php' ?>
</head>

<body>
<?php include("includes/navigation.php");?>
<main>
    <div class="lista-contenedor">
        <p class="titulo">Plataformas</p>
        <div class="plataforma-card plataforma-playstation">
            <img class="plataforma-logo" src="assets/img/playstation.png" />
            <div class="plataforma-footer">
                <p>PLAYSTATION</p>
            </div>
        </div>
        <div class="plataforma-card plataforma-nintendo">
            <img class="plataforma-logo" src="assets/img/nintendo.png" />
            <div class="plataforma-footer">
                <p>NINTENDO</p>
            </div>
        </div>
        <div class="plataforma-card plataforma-xbox">
            <img class="plataforma-logo" src="assets/img/xbox.png" />
            <div class="plataforma-footer">
                <p>XBOX</p>
            </div>
        </div>
        <div class="plataforma-card plataforma-steam">
            <img class="plataforma-logo" src="assets/img/steam.png" />
            <div class="plataforma-footer">
                <p>STEAM</p>
            </div>
        </div>
    </div>
</main>
<?php include("includes/footer.php");?>
</body>

</html>