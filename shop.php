<?php
    
   $conn = mysqli_connect("localhost", "root", "");
   mysqli_select_db($conn, "shopping_db");
   $l_qry = mysqli_query($conn, "SELECT price FROM items WHERE items = 'laptop'") or die("Failed to get Laptop price! ".mysqli_error($conn));
   $l_arr = mysqli_fetch_array($l_qry);
   $l_price =$l_arr['price'];

   $itel = mysqli_query($conn, "SELECT price FROM items WHERE items ='itela44'") or die("failed to get price".mysqli_error($conn));
   $itel_array =mysqli_fetch_array($itel);
   $itel_price = $itel_array['price'];


   $sam = mysqli_query($conn, "SELECT price FROM items WHERE items = 'samsungs11'") or die("failed to get prices".mysqli_error());
   $sam_array = mysqli_fetch_array($sam);
   $sam_price = $sam_array['price'];
   


  ?>
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>

ul{
    list-style: none;
    background-color:  orange;
    color: white;
    font-family: Georgia, 'Times New Roman', Times, serif;
    border-radius: 12px 10px;
}
ul.li{
    list-style: none;
    background-color: darkorchid;
}
ul:hover{
    list-style: none;
    background-color:  orange;
    color: white;
    font-size: larger;
 
    
}
 



  </style>
</head>
<body class ="bg-white">
    <div class="col-md-12   col-xl-12 "> 
    <h1 class=" a p6 rounded-shadow" style="color: orange;"> <center> shop items now</center></h1> <hr>
    <div class="card-columns">
         
        <div class="card bg-white">
          <div class="card-body text-center">
              <h2 style="color: orangered;">laptops</h2>
              <p id = "lap" style = "font-size: 17px;"><?php print $l_price;?>UGX</p>
                <img src="images/laptop.jpg" alt="laptop"style="width: 200px; height: 300px;"><br>
                <p>&nbsp;</p>
              <button class="btn btn-danger">add to cart</button>
            <p class="card-text">ideal computers for new learners</p>
            <ul>
                <li>contact  : 077243 7952</li>
                <li>email    : clintonolot@gmail.com</li>
                 


            </ul>
          </div>
        </div>
        <div class="card bg-white">
          <div class="card-body text-center">
              <h2 style="color: green;">itel A44</h2>
              <p style = "font-size:17px;" ><?php print $itel_price ?>UGX</p>
              <img src="images/itel-a44-pro-8567-thumb.jpg" alt="itel" style="width: 200px; height: 275px;" >
              <p>&nbsp;</p>
              <br>
              <button class="btn btn-success">add to cart</button>
            <p class="card-text">4GB RAM 32 GB storage 5days battery</p>
            <ul>
                <li>contact  : 077243 7952</li>
                <li>email    : odongo@gmail.com</li>


            </ul>
          </div>
        </div>
        <div class="card bg-white">
          <div class="card-body text-center">
              <h2 style="color: blue;"> samsung S11</h2>
              <p style = "font-size:17px"><?php    print  $sam_price ?>UGX  </p>
              <img src="images/Samsung-Galaxy-S11-Plus-Render.jpg" alt="smsung" style="width: 200px; height: 300px;" ><br>
              <p>&nbsp;</p>
              <button class="btn btn-info">add to cart</button>
            <p class="card-text"> 4GB RAM 64 GB storage 5days battery</p>
            <ul>
                <li>contact  : 077243 7952</li>
                <li>email    : okingjamest@gmail.com</li>

            </ul>
          </div>
        </div>
        </div>
</body>
</html>