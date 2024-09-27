<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operaciones</title>

        <style>
            body{
                margin: 5vh;
                border: 2px solid red;
                
            }
            
            
        </style>
    </head>
    <body>

        <?php 
        
            $x = 3;
            $y = 4;
            print "<p>Suma: $x x $y = " . ($x + $y) . "</p>\n";    //Hay que poner un punto antes y después de la operación, para que funcione.
            print "<p>Multiplicación: $x x $y = " . ($x * $y) . "</p>\n";
            

            echo isset($y);
            echo "      la variable es un 4, pero añadiendo isset después del echo, sale un 1<br>\n";
            echo "<br>", $y=20 , "<br><br>\n";
            
            echo isset($y);
            echo "<br><br>\n";
            
            
            $venta=110;
            $compra=100;
            $IVA=($venta-$compra)*0.19;
            $beneficio=($venta-$compra)*0.81;
            echo "La venta es de : $venta dolares \$", "<br>\n";
            echo "La compra es de : $compra dolares \$", "<br>\n";
            echo "El IVA es de : $IVA dolares \$", "<br>\n";
            echo "El beneficio es de : $beneficio dolares \$", "<br>\n";
            

            $hexadecimal=0xFF;
            
            
            echo $hexadecimal, "<br>\n";

            echo "<br><br>\n";

            echo "Esta frase tiene \"Hola\" entre comillas y sin afectar al código<br>\n";
            
            
            echo "Faltan $y días para el verano", "<br>\n";
            
        ?>
        
    </body>
</html>

