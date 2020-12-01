<html>
    <head>
    </head>
    <body>
        <ol>
        <?php
            $provincias = [
                "Salamanca",
                "Zamora",
                "Valladolid",
                "Burgos",
                "León",
                "Palencia",
                "Soria",
                "Ávila",
                "Segovia"
            ];

            foreach ($provincias as $key => $value) {
                echo "<li>".$value." ".$key."</li>";
            }

            for ($i=0; $i <count($provincias) ; $i++) {
                echo "<li>".$provincias[$i]."</li>";
            }
        ?>
        </ol>
    </body>
</html>