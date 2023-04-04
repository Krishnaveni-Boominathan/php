<?php
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo "The count of ain: " .preg_match_all($pattern, $str);
?>
<br>
<?php
//echo substr_count("The rain in SPAIN falls mainly on the plains","ain");
?>