<!DOCTYPE html>
<html>
    <head>
        <title>Chat | Cadastrar</title>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <link rel = "stylesheet" type = "text/css" href = "<?= BASE_URL ?>assets/css/login.css" />
    </head>
    <body>

        <div class = "container">
            <h4>Cadastrar</h4>
            <?php 
                if(!empty($msg)) {
            ?>
                <div class = "warning">
                    <?= $msg; ?>
                </div>
            <?php
                }
            ?>
            <form method = "POST">
                Usuario: <br />
                    <input type = "text" name = "username" /> <br /><br />
                Senha: <br />
                    <input type = "password" name = "pass" /> <br /><br />

                <input type = "submit" value = "Cadastrar" />

            </form>
        </div>

    </body>

</html>