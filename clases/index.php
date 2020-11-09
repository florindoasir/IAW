<html>
 <head>
  <title>Indice de contenidos php</title>
 </head>
 <body>
  <h1>Contenidos</h1>
    <?php
      $currentDirectory = getDirectories("./florindo");

      foreach ($currentDirectory as $key => $value) {
        if($value != "." && $value != ".."){

        }
      }


      function getDirectories($path){
        $directories = scandir($path);
        $resDirectories = [];

        foreach ($directories as $key => $value) {
          if($value != "." && $value != ".."){
            if(is_dir($path."/".$value)){
              $resDirectories[] = $value;
            }
          }
        }
        echo'<pre>';var_dump($resDirectories);die();
        return $resDirectories;

      }


    ?>
 </body>
</html>