<?php
    // Este programa comprueba el tipo MIME de un archivo cualquiera
    // Para probarlo, copie un archivo cualquiera (exe, zip, png, jpg, txt, etc.),
    // cambie su nombre (por ejemplo tmp.tmp) y escriba su ruta (por ejemplo C:):
    $archivo = "C:/Users/Florindo/tmp.tmp";
    // Se muestran los errores por si acaso
    ini_set("display_errors", "on");
    // Escriba aquí la ruta del directorio temporal que usa PHP
    $temporalRuta = "C:/WINDOWS/Temp/";
    // OC genera una archivo temporal
    $temporalArchivo = "temporal";
    // Unimos las dos variables anteriores en una sola variable
    $temporal = $temporalRuta . $temporalArchivo;
    // Copiamos el archivo cuyo tipo MIME se quiere averiguar
    $rc = copy($archivo, $temporal);
    if (!$rc) {
        print "<p>Error copiando $archivo. Compruebe su configuración</p>\n";
        exit();
    }
    // El código siguiente está basado en OC/lib/helper.php
    if (function_exists("finfo_open") && function_exists("finfo_file") && $finfo = finfo_open(FILEINFO_MIME)) {
        $info = strtolower(finfo_file($finfo, $temporal));
        if ($info) {
            $mimeType = substr($info, 0, strpos($info, ";"));
            print "<p>El tipo MIME del archivo $archivo es: $mimeType</p>\n";
        } else {
            print "<p>No se ha obtenido información sobre el tipo del archivo.</p>\n";
        }
        finfo_close($finfo);
    } else {
        print "<p>La extensión fileinfo no se ha encontrado. Compruebe su configuración.</p>\n";
    }
?>
