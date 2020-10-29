<?php
echo $_SERVER['HTTP_USER_AGENT'];
// OBTENIENDO INFORMACION DEL NAVEGADOR
if (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo '<br />Está usando Internet Explorer.';
}else{
    echo '<br />Bien hecho, no uses Internet Explorer.';
}
?>