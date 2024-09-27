<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista</title>

        <style>
            body{
                margin: 5vh;
            }
            .clave{
                color: red;
            }
        </style>
    </head>
    <body>

        <?php
            print "<p>Así se puede hacer una lista de <span class='clave'>objetos:</span></p>";
            print "<ul>\n";
                print "<li>Monitor</li>\n";
                print "<li>Teclado</li>\n";
                print "<li>Ratón</li>\n";
                print "<li>Torre</li>\n";
            print "</ul>\n";
        ?>
        
    </body>
</html>

