<HTML>
  <BODY>
    <?php
      echo "Tipos de formulario: ".$_POST['tipo_formulario']. " </br>";
      echo "El nombre es: ".$_POST['nombre']. " </br>";
      echo "La edad es: ".$_POST['edad']. " años </br>";
      echo "El sexo es: ".$_POST['sexo']. " </br>";


      if($_POST['extra']){
        $instalaciones_elegidas = "";
        foreach ($_POST['extra'] as $key => $value) {

          // $instalaciones_elegidas .= $value.", ";
          $instalaciones_elegidas = $instalaciones_elegidas.$value.", ";

        }
        echo "Las instalaciones elegidas son: ".$instalaciones_elegidas. " </br>";

      }else{
        echo "No ha seleccionado ninguna instalación </br>";
      }
      echo "El CP es: ".$_POST['ciudad']. " </br>";


      if($_POST['idioma']){
        $idiomas = "";
        foreach ($_POST['idioma'] as $key => $value) {

          // $idiomas .= $value.", ";
          $idiomas = $idiomas.$value.", ";

        }
        echo "Idiomas: ".$idiomas. " </br>";

      }else{
        echo "El usuario no habla </br>";
      }

      echo "Comentarios: ".$_POST['comentarios']. " </br>";


    ?>
  </BODY>
</HTML>