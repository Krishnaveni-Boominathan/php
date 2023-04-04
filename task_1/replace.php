<?php
$text = "Earth revolves around\nthe\tSun";
//$pattern="/[^A-z]/";
$pattern="/[\s\n\t]/";
// echo preg_replace($pattern, " ", $text);
// echo "<br>";
// echo str_ireplace(" ","",$text);
// echo "<br>";
echo chop($text,"\n\t' '");
echo "<br>";
// echo chop($text,"");
echo preg_replace('/\s/','',$text);
?>