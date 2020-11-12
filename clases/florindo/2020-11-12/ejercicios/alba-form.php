<html>
    <head>
        <title>Ejercicio 1</title>
    </head>
    <body>
        <?php

        //CONTROL DE ERRORES
        //RESULTADO

        $errores = [];

        if($_POST["enviar"]){

            //COMPROBAR
            if($_POST['nombre'] == ""){
                $errores['nombre'] = "El nombre de la fiesta es obligatorio";
            }
        }

        if($_POST["enviar"] && count($errores) == 0){
            echo "Formulario: ".$_POST['formulario']. " <br>";
            echo "El nombre de la fiesta es: ".$_POST['nombre']. " <br>";
            echo "El numero de personas que acudiran: ".$_POST['personas']. " </br>";
            echo "La fiesta sera: ".$_POST['publica']. " <br>";
            echo "El tipo de musica sera: ".$_POST['tipo']. " <br>";

            if($_POST['espacio']){
                $espacios = "";
                foreach ($_POST['espacio'] as $key => $value) {

                    $espacios = $espacios.$value.", ";

                }
                echo "Los espacios elegidos son: ".$espacios. " </br>";

            }else{
                echo "No ha seleccionado ningun espacio </br>";
            }

            echo "Comentarios: ".$_POST['comentarios']. " </br>";
        }
        else{
        ?>
            <h1>Fiesta</h1>
            <form action="alba-form.php" method="POST" enctype="multipart/form-data">
                <?php
                    if(isset($errores['nombre'])){
                        echo "<p><b>".$errores['nombre']."</b></p>";
                    }
                ?>
                Nombre de la fiesta: <input type='text' name='nombre'><br>

                Numero de personas: <input type='number' name='personas'><br>

                <input type='radio' name='publica' value='Publica' checked> Publica
                <input type='radio'  name='publica' value='privada'> Privada<br>

                Tipo de Musica
                <select name='tipo'>
                    <option value=''>Seleccionar tipo de música</option>
                    <option value='pop'>Pop</option>
                    <option value='rock'>Rock</option>
                    <option value='jazz'>Jazz</option>
                    <option value='indie'>Indie</option>
                </select><br>

                Espacios:
                    <input type='checkbox' name='espacio[]' value='barras' > Barras
                    <input type='checkbox'  name='espacio[]' value='escenarios' checked> Escenarios
                    <input type='checkbox'  name='espacio[]' value='jardin'> Jardín
                    <input type='checkbox'  name='espacio[]' value='zonachill'> Zona Chill
                    <input type='checkbox'  name='espacio[]' value='etc'> Etc
                <br><br>

                Comentarios: <br>
                <textarea name='comentarios' cols='50' rows='5'> </textarea><br>

                <input type='submit' name="enviar" value='Enviar'>
            </form>
        <?php
        }
        ?>
    </body>
</html>