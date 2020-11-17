<html> 
    <head>
        <title>Ejercicio FOR</title>
    </head>
    <body>
        <h1>Sin Usar Funciones</h1>
        <?php
            $email = "florindo.lopdeleduca.jcyl.es";

            for ($i=0; $i < 10; $i++) { 
                echo str_replace("@",$i."@", $email)."<br>";
            }
        ?>

        </br>
        </br>

        <h1>Usando Funciones</h1>
        <?php
            for ($i=0; $i < 10; $i++) { 
                echo replaceEmail($email, $i)."<br>";
            }

            function replaceEmail($email, $number){
                return str_replace("@",($number+1)."@", $email);
            }
        ?>
    </body>
</html> 