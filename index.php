<?php
 $eng = $_GET ['eng'];
 $phy = $_GET ['phy'];
 $chem = $_GET ['chem'];
 if($eng >=98 || $phy >=98 || $chem >=98){
  $msg = "max Value 98";}
  else {echo "true";}
  
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


    <div class="container mt-5 p-5">
        <div class="card p-5">
            <h1>Marks Calculate</h1>

            <form action="#" method="get">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">English</label>
                    <input type="number" name="eng" class="form-control" id="exampleFormControlInput1" placeholder="Enter Eng Marks">
                <span class="text-danger"><?php echo $msg ?></span>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Physics</label>
                    <input type="number" name="phy" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phy Marks">
                    <span class="text-danger"><?php echo $msg ?></span>
                  </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Chemistry</label>
                    <input type="number" name="chem" class="form-control" id="exampleFormControlInput1" placeholder="Enter Chem Marks">
                    <span class="text-danger"><?php echo $msg ?></span>
                  </div>
                <button class="btn btn-primary">Submit</button>

            </form>

           

        </div>
    </div>



<?php
$eng=$_GET["eng"];
$chem=$_GET["chem"];
$phy=$_GET["phy"];
if($eng>=95 || $chem >=95 || $phy >=85){
  $msg= " max value 98";}
  else{"true";}

?>





</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>






<!-- <h1>this is Card</h1>
   
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body"><?php echo $id?>
    <h5 class="card-title"><?php echo $name?></h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>


     <?php
    // $id = "0011";
    // $name = "arzoo";
    // $email = "arzootauseef@gmail.com";
    // $designation = "house wife";
    // $phone = "03212692919";
    // $address = "gulshan iqbal";
    ?> 

    <h1 class="heading"><?php echo $id?></h1>
    <h1 class="heading"><?php echo $name?></h1>
    <h1 class="heading"><?php echo $email?></h1>
    <h1 class="heading"><?php echo $designation?></h1>
    <h1 class="heading"><?php echo $phone?></h1>
    <h1 class="heading"><?php echo $address?></h1> -->

</body>
</html>