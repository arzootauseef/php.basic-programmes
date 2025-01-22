<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$eng = $_GET['eng'];
$phy = $_GET['phy'];
$chem = $_GET['chem'];
$total = 300;
$obt = $eng + $phy + $chem;
$per =$obt / $total *100

?>

<br>
<h1>Total Marks = 300</h1>
<h1>Obtained Marks = <?php echo $obt?>  </h1>
<h1>Percentage = <?php echo $per?></h1>

</body>
</html>