<html>
<body>
<h2>Assignment3: Compute the Factorial of a number</h2>
<?php
$var = rand(0,100);
$counter=0;

while ($counter < $var)
{
   
   $result = $counter*$var;
   $counter=$counter+1;

}
   echo "The random number is $var<br>\n";
   echo "The factorial of $var is $result<br>\n";
?>
</body>
</html>