<html> 
<head>
        <title>Ejercicio</title>
    </head>
<BODY>
    <?php

/* 

Copia los archivos que has realizado en la tarea 2 (p-iaw-2)

Añade la siguiente validación al formulario.

    Nombre de la fiesta: No puede ser vacío.
    Usa un Select para el Tipo de musica para indicar ("POP, ROCK, JAZZ, INDIE"): No puede ser vacío
    Usa input Checkbox para indicar los espacios donde con los que cuenta la fiesta ("barras", "escenarios",
     "jardin", "zona chill",  etc). Debe seleccionar 2 zonas como mínimo


Recuerda que al validar formulario el action del form debe ser el mismo php donde esté el fomulario, en este caso ejercicio1.php.
 En este archivo es donde se deben hacer todas las comprobaciones y mostrar los resultados.
 var_dump($errores);die();
    */
    $errores = [];
    // Control de errores

    if (isset($_POST['enviar'])){


        if($_POST['nombre'] == ""){
            $errores['nombre'] = "El nombre de la fiesta es requerido";
          }

        if(isset($_POST['espacio']) && $_POST['espacio'] == ""){
            $errores['espacio'] = "Los espacios de la fiesta son requeridos";
        }

        if(isset($_POST['TIPO']) && $_POST['TIPO'] == ""){
          $errores['TIPO'] = "No has elegido un tipo de musica";
      }
    }

    if (count($errores) == 0 && (isset($_POST['enviar']))){

    
    
        echo "El nombre de la fiesta es: ".$_POST['nombre']. " </br>";
        echo "La cantidad de personas son: ".$_POST['numero_personas']. " </br>";
        echo "La fiesta es privada: ".$_POST['privada']. " </br>";
        echo "El tipo de musica elegido es: ".$_POST['musica']. " </br>";     
        echo "Comentarios: ".$_POST['comentarios']. " </br>";
  
        if(isset($_POST['espacios'])){
          $espacios_elegidos = "";
          foreach ($_POST['espacios'] as $key => $value) {
  
            // $espacios_elegidos .= $value.", ";
            $espacios_elegidos = $espacios_elegidos.$value.", ";
  
          }
          echo "Los espacios elegidos son: ".$espacios_elegidos. " </br>";
  
            }else{
              echo "No ha seleccionado ningun espacio </br>";
        }
        echo "Comentarios: ".$_POST['comentarios']. " </br>";



      } else {
        ?>  
    
<form method="POST" action="fran.php" enctype='multipart/form-data'>
<input type='hidden' name='formulario' value='Datos'>

    Nombre de la fiesta:
      <input type="text" name="nombre" maxlength="50"><br><br>      
      <?php if(isset($errores['nombre'])){
            echo "<span class='red'>".$errores['nombre']."</span>";
            }?>
            <br>
    Numero de personas:
      <input type="number" name="numero_personas"><br><br>    
    Fiesta privada:
      <input type="radio" name="privada" value="si">Si</input>
      <input type="radio" name="privada" value="no">No</input><br><br>
    Tipo de musica: <br>   
      <select multiple name="musica"> 
      <option value="TIPO">Selecciona el tipo de musica</option>     
      <option value="POP">POP</option>    
      <option value="ROCK">ROCK</option>    
      <option value="JAZZ">JAZZ</option>    
      <option value="INDIE">INDIE</option>  
      </select><br><br>  
      <?php if(isset($errores['musica'])){
            echo "<span class='red'>".$errores['tipo']."</span>";
            }?>
    Espacios:
      <input type="checkbox" name="espacios" value="Barras">Barras</input>
      <input type="checkbox" name="espacios" value="Escenarios">Escenarios</input>
      <input type="checkbox" name="espacios" value="Jardin">jardin</input>
      <input type="checkbox" name="espacios" value="Zona_chill">Zona chill</input><br><br>
      <?php if(isset($errores['espacios'])){
            echo "<span class='red'>".$errores['espacio']."</span>";
            }?>
    Comentarios:
      <textarea rows="6" cols="40" name="comentarios"></textarea>
      <br><br>  
    <!--Botón de enviar-->
      <input type="submit" name="enviar" value="Enviar"></input>
      
      </form>
        <?php    
        }
        ?>
    </body>
</html> 