<?php
$n=5;
for ($i=1; $i<=$n; $i++) 
{
  for ($j=1; $j<=$n; $j++) 
    {
        if($j==$i || $i+$j==$n+1){ 
            echo "@";  
        }
        else  {
           echo "&nbsp; "; 
        }           
    }        
   echo "<br>";
 
}
?>