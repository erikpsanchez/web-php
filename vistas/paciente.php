<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        .main {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
        }

        .btn-sesion {
            color: white;
            background-color: #42b72a;

        }

        .btn-sesion:hover {
            color: white;
            background-color: #36a420;
        }

        .btn-registro {
            color: white;
            background-color: #1877f2;

        }

        .btn-registro:hover {
            color: white;
            background-color: #166fe5;
        }

        label {
            color: gray;
        }
    </style>
</head>

<body>
    <div class="main">
        <main class="form-signin w-100 m-auto shadow-sm rounded">
            <form action="" method="post">
                <img class="rounded mx-auto d-block" src="img/logo.svg" alt="" width="72" height="57">
                <h1 class="h3 my-3 fw-normal text-center">Iniciar Sesión</h1>

                <div class="form-floating mb-2">
                    <input type="text" class="form-control" id="floatingNombre" name="usuario">
                    <label for="floatingNombre">Usuario</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" class="form-control" id="floatingContrasena" name="contrasena">
                    <label for="floatingContrasena">Constraseña</label>
                </div>

                <button class="w-100 btn btn-lg mb-2 btn-sesion" name="btn-sesion" type="submit">Iniciar Sesión</button>
            </form>
            <?php
                    if (isset($errorLogin)) {
                        echo '<div class="alert alert-danger" role="alert">
                        ' . $errorLogin . '
                        </div>';
                    }
                ?>
            <hr>
            <a class="w-100 btn btn-lg btn-primary mt-2 btn-registro" href="registro-paciente.php">Crear Cuenta</a>
        </main>
    </div>
</body>

</html>