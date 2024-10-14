
<div>
    <a href="?nb=1&msg=Test">Test (1x)</a>
    <a href="?nb=5&msg=Test">Test (5x)</a>
<?php

$i=0;
$nb=$_GET['nb'];
$msg=$_GET['msg'];
$isImg=isset($_GET['img']);
?>

<h1>
<?php
do {
    if($isImg){
        echo "<img src='$msg'>";
    }else {
        echo "$msg<br>";
    }
    $i++;
}while($i<$nb);
echo "</h1>";
