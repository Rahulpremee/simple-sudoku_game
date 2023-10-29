<?php
$a=$_GET['text1'];
$b=$_GET['text2'];
$c=$_GET['text3'];
$d=$_GET['text4'];
$e=$_GET['text5'];
$f=$_GET['text6'];
$g=$_GET['text7'];
$h=$_GET['text8'];
?>
<html>
<body bgcolor="sky-blue">
<h1 align="center">
</body>
</html><?php 
if($a==3 and $b==1 and $c==4 and $d==2 and $e==3 and $f==1 and $g==2 and $h==4)
{ 
echo "Congratulation !!!"."<br>"."Won";
}
else
{
 echo "Oops !!!"."<br>"."wrong input";
}
?>