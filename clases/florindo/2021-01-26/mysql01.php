<html>
  <head>
    <title>MySQL 01 - Consulta a BD (Agenda)</title>
  </head>
  <body>
    <h1>Mostrar Nombres de la Agenda. BD </h1>
  <?php
    //https://www.hostinger.es/tutoriales/conectar-php-mysql/

    $servername = "mysql";
    $database = "world";
    $username = "root";
    $password = "secret";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "
      CREATE TABLE IF NOT EXISTS `equipo` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(250) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='Equipos de baloncesto';
    ";
    $resultado = $conn->query($query);
var_dump($resultado);die;
    if ($resultado) {
        while( $row = $resultado->fetch_array() )
        {
            echo $row['Name'] . " (" . $row['Continent'].")";
            echo "<br />";
        }
        /* liberar el conjunto de resultados */
        $resultado->close();
    }else{
        echo "Error in the query ";
    }

    echo "Connected successfully";
    mysqli_close($conn);

  ?>
  </body>
</html>