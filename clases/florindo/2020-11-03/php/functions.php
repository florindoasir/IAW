<?php
// FUNCIONES PHP

function openHtmlTag(){
	echo "<html>";
}
function closeHtmlTag(){
	echo "</html>";
}
function openTag($tag, $id, $class = ""){
	echo "<".$tag." id=".$id." class=".$class.">";
}
function closeTag($tog){
	echo "</".$tog.">";
}
function sayHello(){
	echo "Hello";
}

function sayWhatever($whatever){
	echo "<b>".$whatever."</b>";
}
openHtmlTag();
openTag("p", "id1");
sayHello();
closeTag("p");
openTag("p", "id2");
sayWhatever("Estoy usando una función");
closeTag("p");
openTag("p", "id3", "redcolor");
sayWhatever("Estoy usando una función OTRA VEZ");
closeTag("p");
closeHtmlTag();