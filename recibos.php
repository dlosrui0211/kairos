<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Recibos - Kairos</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #1a0033;
            color: white;
            padding: 20px;
        }

        header {
            background: #2d0052;
            padding: 20px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 40px;
        }

        .left-section,
        .right-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .search-bar {
            background: white;
            padding: 10px 20px;
            border-radius: 30px;
            width: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
            font-weight: bold;
        }

        .lista-contenedor {
            background: #260047;
            padding: 30px;
            border-radius: 15px;
            border: 2px solid #4d00b3;
            max-width: 900px;
            margin: 0 auto;
        }

        .titulo-lista {
            background: #00b3ff;
            padding: 8px 12px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .icono-titulo {
            width: 18px;
        }

        .recibo-card {
            background: #3d0069;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.4);
        }

        .recibo-left {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .recibo-icono {
            width: 55px;
        }

        .info-recibo p {
            font-size: 16px;
            margin-bottom: 5px;
        }

        .info-recibo p {
            font-size: 14px;
            color: #cccccc;
        }

        .recibo-right {
            display: flex;
            align-items: center;
            gap: 25px;
            font-size: 14px;
            color: #bbbbbb;
        }

        .icono-basura {
            width: 25px;
            cursor: pointer;
        }


        @media (max-width: 768px) {
            header {
                flex-wrap: wrap;
                gap: 15px;
                justify-content: center;
            }

            .search-bar {
                width: 100%;
                max-width: 350px;
            }

            .lista-contenedor {
                padding: 20px;
            }

            .recibo-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }

            .recibo-right {
                width: 100%;
                justify-content: space-between;
                gap: 15px;
                font-size: 13px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 18px;
            }

            .recibo-icono {
                width: 40px;
            }

            .recibo-card {
                padding: 15px;
            }

            .info-recibo p {
                font-size: 14px;
            }

            .info-recibo p {
                font-size: 12px;
            }

            .recibo-right {
                font-size: 12px;
                gap: 10px;
            }

            .icono-basura {
                width: 20px;
            }

            header {
                padding: 15px;
            }

            .search-bar {
                padding: 8px 15px;
            }
        }
    </style>
</head>





<body>

<?php include("includes/design-top.php");?>
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