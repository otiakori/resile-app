<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resile app</title>
    <link rel="stylesheet" href="style.css">
     <!-- <script src="app.js"></script> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  <h1 class=" a p6 rounded-shadow"> <center> SIGN-UP FORM</center></h1> <hr>
  
<br>
<div style="align-content: center" class="" ><center>
<form class="form col-md-4 mt2 bg-dark" method="post" action="insert.php">
  <fieldset>
  <p id = "greet" onload ="return greeting()"  style = "color:white; margin: 3"></p>
    <input type="text" id="fn" class="form-control" oninput="ComparePassword()" placeholder="firstname" name="fname" style="width: auto; margin-top:3rem; font-style:oblique;"  maxlength = "15"><br>
    <input type="text" id="ln" class="form-control" oninput="ComparePassword()" placeholder="lastname" name="lname" style="width: auto; font-style:oblique;"  maxlength = "15"><br>
    <input type="email" id="e" class="form-control" oninput="ComparePassword()" placeholder="email" name="email" style="width: auto;font-style:oblique;"  maxlength = "30"><br>
    <input type="password" id="pass" class="form-control" oninput="ComparePassword()" placeholder="password" name="pwd" style="width: auto;font-style:oblique;"  maxlength = "8" minlength = "6"><br>
    <input type="password" id="conf-pass" class="form-control" oninput="ComparePassword()" placeholder="re-enter password" style="width: auto;font-style:oblique;"  maxlength = "15"><br>
    <button type="submit" disabled id="btn" class="btn btn-primary">signup</button>
    <label id="l1">Pass Ckeck!</lable>
    <p style="color:white;">already have an account? <a href=""> click here</a> to login</p>
  </fieldset>
</form>
</center>

</div>
<script type="text/javascript">
  function ComparePassword(){
    let confField = document.getElementById('conf-pass');
    let p1 = document.getElementById('pass').value;
    let p2 = confField.value;
    let fname = document.getElementById('fn').value;
    let lname = document.getElementById('ln').value;
    let email = document.getElementById('e').value;
    if (fname ==="" || lname ==="" || email ==="") {
      document.getElementById('btn').disabled = true;
    }
    if(p1 === ""){
      document.getElementById('btn').disabled = true;
      document.getElementById('l1').innerHTML = "";
    }
    if(p1 !== p2) {
      confField.style.color = "Red";
      document.getElementById('l1').style.color = "white";
      document.getElementById('l1').style.backgroundColor = "crimson";
      document.getElementById('l1').innerHTML = "Passwords don't match!";
      document.getElementById('btn').disabled = true;
    }
    if(p1 === p2 && p1 !== "") {
      confField.style.color = "Blue";
      document.getElementById('l1').style.color = "white";
      document.getElementById('l1').innerHTML = "Passwords match!";
      document.getElementById('l1').style.backgroundColor = "green";
    }
    if(fname !=="" && lname !=="" && email !=="" && p1 !=="" && p1 === p2){
      document.getElementById('btn').disabled = false;
    }
  }

//greeting

  const time = new Date().getHours();
let greeting;
if (time < 10) {
  greeting = "Good morning!";
} else if (time < 20) {
  greeting = "Good day!";
} else {
  greeting = "Good evening!";
}
document.getElementById("greet").innerHTML = greeting;


  


</script>
</body>
</html>
