
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
     <script src="app.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
         

  <h1 class=" a p6 rounded-shadow"> <center> SIGN-UP FORM</center></h1> <hr>
<br>
<div style="align-content: center" class="" ><center> 
<form class="form col-md-4 mt2 bg-dark" method="post" action="insert.php" name ="FORMS" onsubmit = "return validateform() " >
  <fieldset>
    <input type="text" class="form-control" placeholder="firstname" name="fname" style="width: auto; margin-top:3rem;"  ><br>
    <input type="text" class="form-control" placeholder="lastname" name="lname" style="width: auto;" ><br>
    <input type="email" class="form-control" placeholder="email" name="email" style="width: auto;"><br>
    <input type="password" class="form-control" placeholder="password" name="pwd" style="width: auto;"><br>
    <input type="password" class="form-control" placeholder="re-enter password" style="width: auto;"><br>
    <button type="submit" class="btn btn-primary" >signup</button>

    <p style="color:white;">already have an account? <a href=""> click here</a> to login</p>
  </fieldset>
</form>
</center>

</div>












</body>
</html>