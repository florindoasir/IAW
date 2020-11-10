<html>
  <style>
    .red{
      color:red;
    }
  </style>
  <body>
    <?php

      // GESTION DE ERRORES
      $errores = [];
      $hayImagen = false;

      if($_POST['enviar']){
        //FORMULARIO ENVIADO

        //COMPROBAR COMENTARIO
        if($_POST['comentario'] == ""){
          $errores['comentario'] = "El comentario es requerido";
        }
        //TRATAMIENTO ARCHIVO
        if($_FILES['fichero']['tmp_name'] != ""){
          if (is_uploaded_file ($_FILES['fichero']['tmp_name']))
          {
            $nombreDirectorio = "img/";
            $nombrearchivo    = "Florindo-" . $_FILES['fichero']['name'];
            $hayImagen        = true;

            move_uploaded_file ($_FILES['fichero']['tmp_name'], $nombreDirectorio . $nombrearchivo);
          }
          else{
            print ("No se ha podido subir el archivo\n");
          }



        }
      }

        if(count($errores) == 0 && $_POST['enviar']){
    ?>

        <h1>Resultado del formulario</h1>

        <table>
          <tr>
            <td>Nombre</td>
            <td><?php echo $_POST['nombre'] ?></td>
          </tr>
          <tr>
            <td>Email</td>
            <td><?php echo $_POST['email'] ?></td>
          </tr>
          <tr>
            <td>Comentario</td>
            <td><?php echo $_POST['comentario'] ?></td>
          </tr>
          <?php if($hayImagen){ ?>
          <tr>
            <td>Imagen</td>
            <td><img width="200px" src="<?php echo $nombreDirectorio . $nombrearchivo ?>"></td>
          </tr>
          <?php } ?>
        </table

    <?php
      }else{

    ?>
      <h1>Formulario</h1>
      <form action="nuevoformulario.php" method="POST" enctype="multipart/form-data">

        Nombre: <input type="text" name="nombre" value="<?php if(isset($_POST['nombre'])){ echo $_POST['nombre']; }?>"></br>

        Email: <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; }?>"></br>

        Subir archivo: <input type="file" name="fichero"></br>

        Comentario*: <textarea name="comentario"><?php if(isset($_POST['comentario'])){ echo $_POST['comentario']; }?></textarea></br>
        <?php if(isset($errores['comentario'])){
          echo "<span class='red'>".$errores['comentario']."</span>";
        }?>

        <input type="submit" name="enviar" value="Enviar">
      </form>
    <?php
      }
    ?>
  </body>
</html>