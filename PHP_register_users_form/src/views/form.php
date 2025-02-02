<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../dist/css/form.css">
    <title>Formulario registro | PHP-8</title>
</head>
<body>

    <main>
        <div>
            <div class="container content-form">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-text-form">
                        <div class="text-form">
                            <div>
                                <h1>Acceder</h1>
                                <p>Ya tienes una cuenta?</p>
                                <a href="../signup/index.php">Inicia sesión ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 content-login">
                        <div class="form-login">
                            <div>
                                <form action="../inc/register.php" autocomplete="off" method="post">
                                    <h3>Registrate</h3>
                                    <p>Ingresa tu informacion para crear tu cuenta.</p>

                                    <div class="txt-box">
                                        <input type="text" placeholder="Usuario" name="username">
                                        <span><i class="bi bi-person"></i></span>
                                    </div>

                                    <div class="txt-box">
                                        <input type="email" placeholder="Email" name="email">
                                        <span><i class="bi bi-envelope"></i></span>
                                    </div>
                                    <div class="txt-box">
                                        <input type="password" placeholder="Password" name="password">
                                        <span><i class="bi bi-lock"></i></span>
                                    </div>
                                    <div class="txt-box">
                                        <button type="submit" name="bt-auth">Login</button>
                                    </div>
                                    <div class="password-reset">
                                        <a href="">¿Forgot your password?</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>