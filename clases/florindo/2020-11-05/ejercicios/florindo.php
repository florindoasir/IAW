<?php
// FUNCIONES PHP

function openTag(
  $tag
  , $id=""
  , $class = ""
  , $text = ""
){
	echo "<".$tag." id=".$id." class=".$class.">".$text;
}
function closeTag($tag){
	echo "</".$tag.">";
}

$title = "Este es el título ".$_GET['title'];
$content = "Hola, este es el contenido";


openTag("html"); //<html>
openTag("head"); //<head>
openTag("title", "", "", $title); //<title>
closeTag("title"); //</title>
closeTag("head"); //</head>
openTag("body"); //<body>
openTag("h1", "", "red", $title); //<h1>
closeTag("h1"); //</h1>
openTag("p", "", "red", $content); //<p>
closeTag("p"); //</p>
closeTag("body"); //</body>
closeTag("html"); //</title>

