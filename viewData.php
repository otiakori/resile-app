<?php
 $con = mysqli_connect("localhost", "root", "");
 mysqli_select_db($con, "shopping_db");
 $q = mysqli_query($con, "SELECT * FROM items");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php 
     while($a = mysqli_fetch_array($q)){
         $i = $a['items'];
         $p = $a['price'];
         $in = $a['image'];
         ?>
         <div class="card bg-white col-md-4">
          <div class="card-body text-center">
          <h1><?php print $i;?></h1>
         <h1><?php print $p;?></h1>
         <img src="images/<?php print $in;?>" alt=""><br>
              <button class="btn btn-success">add to cart</button>
             
          </div>
        </div>
         
         <?php
     }
    ?>
</body>
</html>