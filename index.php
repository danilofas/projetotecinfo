<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


    <title>SG - Sistema de Gestão</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col s6">
                <form action="_phpaction/validaLogin.php" method="post">
                    <h4>Seja Bem Vindo</h4>
                    <!-- <h6>Informe seus dados:</h6> -->
                    <div class="input-field col s12">
                        <input id="usuario" type="text" class="validate" name="usuario" />
                        <label for="usuario">Usuário</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password" />
                        <label for="password">Senha</label>
                    </div>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
        </script>

    </footer>
</body>

</html>