<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrices</title>

    <style>
    body{
                margin: 5vh;
            }
    
        .andres{
            color:green;
        }
        .barbara{
            color:blue;
        }
        .camilo{
            color:red;
        }
        .numerico{
            color:yellow;
            background-color: blue;
        }
   
    </style>
            </head>
<body>
    <?php

       $nombres = ["Andrés", "Bárbara", "Camilo"];

        print "<p>Ella se llama <span class='andres'>$nombres[0]</span> </p>\n";
        print "<p>Él se llama <span class='barbara'>$nombres[1]</span></p>\n";
        print "<p>Él se llama <span class='camilo'>$nombres[2]</span></p>\n";

        print "<br><br>\n";
        
        $edades = ["Andrés" => 20, "Bárbara" => 19, "Camilo" => 17];

        print "<p>Bárbara tiene <span class='barbara'>{$edades['Bárbara']}</span> años.</p>\n";  // Cambiado para usar comillas simples
        
        /* Array multidimensional asociativo */
        $datos = [
            ["nombre" => "pepe", "edad" => 25, "peso" => 80],
            ["nombre" => "juan", "edad" => 22, "peso" => 75],
        ];
        
        print "<p>{$datos[1]['nombre']} pesa {$datos[1]['peso']} kilos</p>\n"; // Cambiado para usar comillas simples
        print "\n";
        print "<p>" . $datos[0]["nombre"] . " tiene " . $datos[0]["edad"] . " años</p>\n";
        
        $datos = [];
        $datos["nombre"] = "Santiago";
        $datos["apellidos"] = "Ramón y Cajal";
        
        print "<pre>";
        print_r($datos);
        print "</pre>";


        $numero = ['telefono' => 424153289];
        

        //array_pop($numero); //elimino el valor del array $numero


        print "<p>Mi nº de teléfono es <span class='numerico'> {$numero['telefono']}</span></p>\n";
        //Poner con corchetes el pack completo + la variable interna con llaves
        

//se visualiza el array general
        //el array [1]
            $datos = [];
            $datos[1]["nombre"] = "Santiago";
            $datos[1]["apellidos"] = "Ramón y Cajal";
        //se cierra el array [1]

        //el array [2]
            $datos[2]["nombre"] = "Leonardo";
            $datos[2]["apellidos"] = "Torres Quevedo";
            
            print "<pre>";
            print_r($datos);
        //se cierra el array2
//se cierra el array general
        print "<pre>";
        print "El contenido se ve parecido, pero el código es bastante diferente\n";
//se visualiza el array general
        //el array [1]
        $datos = [];
        $datos[1]["nombre"] = "Santiago";
        $datos[2]["apellidos"] = "Torres Quevedo";
    //se cierra el array [1]
            //a pesar del orden escrito, en la web se estructura, 
            //según el orden de los nº, por lo que se está viendo:
            //Santiago
            //Ramón y Cajal, pero luego se ven los apellidos y luego el nombre
    //el array [2]
        $datos[2]["nombre"] = "Leonardo";
        $datos[1]["apellidos"] = "Ramón y Cajal";
        
        
        print "<pre>";
        print_r($datos);
                //se cierra el array2
            //se cierra el array general

            ?>
    
    
</body>
</html>