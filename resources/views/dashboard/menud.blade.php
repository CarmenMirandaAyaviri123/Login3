<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #A4A6D0; /* Cambio de color de fondo */
            margin: 0;
            padding: 0;
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .dashboard {
            width: 100%;
            border: 1px solid #DCDCDC;
            flex: 1;
            display: flex;
            flex-direction: column;
            position: relative;
            overflow: hidden; 
        }

        .logo {
            margin: 20px;
            margin-top: 80px;
            width: 224px;
            height: 51px;
            position: absolute;
            z-index: 1;
        }

        .titulo {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0 10px 0;
            color: #333333;
        }

        .menu-navegacion {
            float: left;
            width: 229px;
            height: 660px;
            background-color: #7A83D3;
            color: white;
            padding: 20px;
            position: relative;
            z-index: 0;
        }

        .menu-navegacion ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .menu-navegacion li {
            margin-bottom: 10px;
        }

        .menu-navegacion a {
            color: #FFFFFF;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
            background-color: #7A83D3;
            border-radius: 5px;
        }

        .grafica-pedidos-mes,
        .grafica-ventas-producto {
            width: 400px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #A4A6D0;
            padding: 20px;
            display: none;
        }

        .grafica-pedidos-mes h2,
        .grafica-ventas-producto h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: white;
        }

        .menu-navegacion:hover + .grafica-pedidos-mes,
        .menu-navegacion:hover + .grafica-ventas-producto {
            display: block;
        }

        .footer {
            background-color: #A4A6D0;
            color: #1E293B;
            padding: 10px;
            text-align: center;
            flex-shrink: 0;
        }
    </style>
</head>
<body>
    <div class="dashboard">
        <img src="imagenes\logo_aula_tec.png" class="logo"> 
        <div class="menu-navegacion">
            <ul>
                <a>
                <a>
                <a>
                <a>
                <li><a href="#">Registrar ambientes</a></li>
                <li><a href="#">Registrar horarios</a></li>
            </ul>
        </div>
        <!-- Footer -->
        <footer class="footer mt-auto py-3 text-center">
            <div class="container">
                <span class="text-muted">Sistema de reservas de aulas -@2024 - DevGennius </span>
            </div>
        </footer>
        <!-- End Footer -->
    </div>
</body>
</html>
