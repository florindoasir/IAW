<?php
// Configuración específica para MYSQL

// Configuración general

define("MYSQL_HOST", "mysql:dbname=test_iaw;host=localhost");        // Nombre de host
define("MYSQL_USER", "test");                            // Nombre de usuario
define("MYSQL_PASSWORD", "test");                        // Contraseña de usuario
// Funciones específicas de bases de datos (MYSQL)

function conectaDb()
{
    try {
        $tmp = new PDO(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD);
        $tmp->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
        $tmp->exec("set names utf8mb4");
        return $tmp;
    } catch (PDOException $e) {
        cabecera("Error grave", MENU_PRINCIPAL);
        print "    <p class=\"aviso\">Error: No puede conectarse con la base de datos.</p>\n";
        print "\n";
        print "    <p class=\"aviso\">Error: " . $e->getMessage() . "</p>\n";
        pie();
        exit();
    }
}

function borraTodo($db, $nombreTabla, $consultaCreacionTabla)
{
    $consulta = CONSULTA_BORRA_DB;
    if ($db->query($consulta)) {
        print "    <p>Base de datos borrada correctamente.</p>\n";
        print "\n";
    } else {
        print "    <p class=\"aviso\">Error al borrar la base de datos.</p>\n";
        print "\n";
    }

    $consulta = CONSULTA_CREA_DB;
    if ($db->query($consulta)) {
        print "    <p>Base de datos creada correctamente.</p>\n";
        print "\n";
        $consulta = $consultaCreacionTabla;
        if ($db->query($consulta)) {
            print "    <p>Tabla creada correctamente.</p>\n";
            print "\n";
        } else {
            print "    <p class=\"aviso\">Error al crear la tabla.</p>\n";
            print "\n";
        }
    } else {
        print "    <p class=\"aviso\">Error al crear la base de datos.</p>\n";
        print "\n";
    }
}
