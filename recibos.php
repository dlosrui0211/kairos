<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Recibos - Kairos</title>
    <?php include_once 'includes/head-tag-contents.php' ?>
</head>





<body>

<?php include("includes/navigation.php");?>
<main>


    <h1>RECIBOS</h1>

    <div class="lista-contenedor">


        <p class="titulo">Recibos</p>

        <div class="recibo-card">
            <div class="recibo-left">
                <img class="recibo-icono" src="assets/img/recibo.png" />
                <div class="info-recibo">
                    <p>Recibo 1</p>
                    <p>Solicitar devolución</p>
                </div>
            </div>

            <div class="recibo-right">
                <span>30 días</span>
                <img class="icono-basura" src="assets/img/papelera.png" />
            </div>
        </div>

        <div class="recibo-card">
            <div class="recibo-left">
                <img class="recibo-icono" src="assets/img/recibo.png" />
                <div class="info-recibo">
                    <p>Recibo 2</p>
                    <p>Solicitar devolución</p>
                </div>
            </div>

            <div class="recibo-right">
                <span>30 días</span>
                <img class="icono-basura" src="assets/img/papelera.png" />
            </div>
        </div>

        <div class="recibo-card">
            <div class="recibo-left">
                <img class="recibo-icono" src="assets/img/recibo.png" />
                <div class="info-recibo">
                    <p>Recibo 3</p>
                    <p>Solicitar devolución</p>
                </div>
            </div>

            <div class="recibo-right">
                <span>30 días</span>
                <img class="icono-basura" src="assets/img/papelera.png" />
            </div>
        </div>
    </div>


</main>

<?php include("includes/footer.php");?>



</body>

</html>