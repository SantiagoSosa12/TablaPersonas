<!DOCTYPE html>
<html>
    <head>
        <title>Actividad 2 Lista de personas</title>
        <meta http-equiv="Content-Type" 
              content="text/html; charset=ISO-8859-
              1" />
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
            }

            th, td {
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even){
                background-color: #f2f2f2
            }

            th {
                background-color: #024A86;
                color: white;
            }
        </style>
    </head>
    <body>
        <h1>Actividad 2 Lista de Personas </h1>

        <table style="width:100%">
            <tr>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Fecha de nacimiento</th>
                <th>Color Favorito</th>
                <th>Significado del color</th>
            </tr>
            <?php
            /*
             * Santiago Sosa Reyes
             * DESARROLLO WEB CON PHP
             * Evidencia 3 Taller Uso de Arreglos
             */
            //Significado de cada uno de los colores
            $listadoColoresSignificado = array(
                "azul" => "Tranquilidad, calma, Seriedada",
                "purpura" => "Lujo, elegancia, misterio",
                "rosado" => "Dulzura, infancia, delicadeza",
                "rojo" => "Pasion, energia, fuerza",
                "naranja" => "Amistad, calidez, confianza"
            );
            //Array multidimencional con los datos de las personas
            $listadoPersonas = array(
                array("Julian Moreno", "Carrera 5 # 7 -84", 3225847589, "23/12/1997", "rojo"),
                array("Pedro Perez", "Calle 10 # 7 -79", 3158796540, "05/05/1995", "amarillo"),
                array("Laura Quintero", "Calle 9 # 9 -59", 3695148578, "15/12/1990", "azul"),
                array("Erika Molano", "Avenida 15 # 8 - 14", 3227634987, "12/12/1987", "naranja"),
                array("David Torres", "Carrera 10 # 7 -84", 3208514759, "11/11/1975", "negro")
            );
            
            //Se rrecorre el Array multidimensional
            for ($i = 0; $i < count($listadoPersonas); $i++) {
                echo '<tr>';
                for ($j = 0; $j < count($listadoPersonas[$i]); $j++) {
                    echo '<td>' . $listadoPersonas[$i][$j] . '</td>';
                    if ($j == 4) {
                        //Si no se encuentra el significado del color se muestra un mensaje alternativo
                        if (!empty($listadoColoresSignificado[$listadoPersonas[$i][$j]])) {
                            echo '<td>' . $listadoColoresSignificado[$listadoPersonas[$i][$j]] . '</td>';
                        } else {
                            echo '<td>No se encuentra el significado</td>';
                        }
                    }
                }
                echo '</tr>';
            }
            ?>
        </table>
    </body>
</html>