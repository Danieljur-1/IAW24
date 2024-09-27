<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>VARIABLES</title>

        <style>
                .bold {
                        font-weight: bold;
                    }

                    .red {
                        color: red;
                        font-size: 3rem;
                    }
                    body{
                        margin: 5vh;
                    }

                    .linea{
                        display: flex;
                    }
        </style>

    </head>

    <body>
        

        <?php

            $minombre="Daniel";

            
            print "<p class='bold'>Buenas tardes, mi nombre es: <span class='red'>$minombre</span></p>";//Con span, selecciono contenido para usar el CSS
        
            print "
            <pre>$minombre, esto está        
            en dos lineas, pero la segunda está más avanzada que la primera.</pre>";
                    
            
            $union = "Pasa";
            $union .= " tiempos.";  //usamos el punto. para unir dos variables con la misma declaración, para que formen una única variable.
            print "<p>$union</p>\n";


            echo " <span class='linea'> PHP, te da la bienvenida, <br> que disfrutes </span>";    
            print "<br>";
            echo "Voy a disfrutar a tope.";
            print "<br>";
            echo "Vamos a programar un nivel más.";

           $nombre = "Don Pepito";
           $saludos = [["Hello", "Hola"], ["Goodbye", "Adiós"]];
            
           echo "<br><br>\n";
           
            $x="variable";
            $$x=5;
            echo $variable, "<br>\n";

            $x="variable2";
            $$x="El chocolatero";
            echo $variable2, "<br>\n";

        ?>

    </body>

</html>