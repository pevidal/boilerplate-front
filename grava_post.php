<?php

$title= $_POST["title"];
$description= $_POST["description"];
$contet= $_POST["content"]; 

if (empty ($title))
{
 header ("Location: new_post.php?msgerro=campovazio");
}


?>
