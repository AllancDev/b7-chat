<!DOCTYPE html>
<html>
    <head>
        <meta name = "viewport" content = "width=device-width, initial-scale=1" />
        <title>Chat B7</title>
        <link rel = "stylesheet" type = "text/css" href = "<?php echo BASE_URL; ?>assets/css/style.css" />
        <script src = "<?php echo BASE_URL; ?>assets/js/jquery-3.4.0.slim.js"></script>
    </head>
    <body>
        <?php
            $this->loadViewInTemplate($viewName, $viewData);
        ?>
    
        <div class = "modal_bg" style = "display: none;">
            <div class = "modal_area">
                ....

            </div>
        </div>
    
        <script src = "<?php echo BASE_URL; ?>assets/js/chat.js"></script>
        <script src = "<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>
