<html lang="pl_PL">
<head>
<meta charset="utf-8" />
<title>Choinka </title>
<link rel="stylesheet" type="text/css" href="cos.css">
</head>
<body>

<center>
<?php

echo "<div id='cl'>";
echo "+</br>";
echo "+++</br>";
echo "+</br>"; 
echo "</div>";
header("Refresh:2");
$color=array('geen','orange','blue','white','yellow','black','red');

echo "<div id='cho'>";
$chojka='**';
echo '*';
for($szer=0; $szer < 10;$szer++){
for ($col=0; $col<$szer;$col++){
	$i = rand(1,10);
echo "<font color='$color[$i]'>*</font>";
echo $chojka; 
}
 echo "<br />";
}
  
  
  echo '*';
  for($szer=3; $szer < 12; $szer++){
for ($col=0; $col<$szer;$col++){
	$i = rand(1,12);
echo "<font color='$color[$i]'>*</font>";
echo $chojka; 
}
 
    echo "<br />";
  }
  
   echo '*';
   
  for($szer=5; $szer < 16;$szer++){
for ($col=0; $col<$szer;$col++){
 $i = rand(1,16);
echo "<font color='$color[$i]'>*</font>";
echo $chojka; 
}
 
    echo "<br />";
	
  }
  
  echo "</div>";
  echo "<div id='pin'>";
  echo "***<br />";
  echo "***<br />";
  echo "</div>";
?>
</body>
</html>