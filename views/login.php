<!DOCTYPE html>
<html>
    <head>
        <title>Chat | Login</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" type = "text/css" href = "<?php echo BASE_URL; ?>assets/css/login.css" />
    </head>
    <body>

        <div class = "container">
                <h4>Login</h4>
                <?php 
                if(!empty($msg)) {
                ?>
                    <div class = "warning">
                        <?= $msg; ?>
                    </div>
                <?php
                    }
                ?>
                <form method = "POST" action = "<?= BASE_URL; ?>login/signin">
                    Usuario: <br />
                        <input type = "text" name = "username" /><br /><br />
                    Senha: <br />
                        <input type = "password" name = "pass" /><br /><br />
                        <input type = "submit" value = "Entrar" />
                        <br /><br /> 
                </form>

            <a href = "<?= BASE_URL; ?>login/signup">Cadastre-se</a>

        </div>

    </body>
</html>