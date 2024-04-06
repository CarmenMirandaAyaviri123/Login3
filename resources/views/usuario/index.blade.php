<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Inicio de sesión</title>
    <style>
        body {
            background-color: #A4A6D0;
        }
        
        .form-container {
            background-color: #FFFFFF;
            width: 515px;
            height: 460px;
            border-radius: 0; 
            border: none;
        }
        
        .inicio-sesion-text {
            color: #1C4A8E;
        }
        
        /* Estilo para el footer */
        .footer {
            background-color: #A4A6D0;
            color: #1E293B; 
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        
        /* Estilo para el tamaño de la imagen del logo */
        .navbar-brand img {
            width: 224px;
            height: 51px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #A4A6D0;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand" href="#">
                <img src="imagenes/aula_tec_logo.png">
            </a>
            <!-- Botón de inicio de sesión -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú de navegación -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="{{route('usuario.index')}}" class="btn btn-outline-success btn-primary" type="submit" style="background-color: #3862D8; color: #FFFFFF;">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Fin de Navbar -->

    <div class="container">
        <div class="row justify-content-center align-items-center vh-80">
            <div class="col-lg-6">
                <div class="card bg-white text-dark form-container">
                    <div class="card-body p-5 text-center">
                        <h2 class="fw-bold mb-4 text-uppercase inicio-sesion-text">INICIAR SESION</h2>
            
                        <form action="">
                            <div class="mb-4">
                                <label for="typeEmailX" class="form-label text-dark mb-0 text-end">Correo electrónico</label>
                                <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                            </div>
                            <div class="mb-4">
                                <label for="typePasswordX" class="form-label text-dark mb-0 text-end">Contraseña</label>
                                <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                            </div>
                            <button class="btn btn-outline-light btn-lg form-control-lg" style="background-color: #3862D8;" type="submit">Ingresar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <span>Sistema de reserva de aulas - © 2024 - DevGenius</span>
        </div>
    </footer>
    <!-- Fin del footer -->

</body>

</html>
