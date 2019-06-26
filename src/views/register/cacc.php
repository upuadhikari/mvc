<!DOCTYPE html>
<html>
<head>
	<title>asdfg</title>
</head>
<body>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <form method="POST">
<div class="container">
	<form method="POST">
	<h3>Create Account</h3>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" name="mail" required value="<?php if(isset($_POST['submit'])) echo($_POST['mail'])?>">
  </div>



    <div class="form-group">
    <label for="exampleInputName1">Full Name</label>
    <input type="name" class="form-control" id="fname" aria-describedby="fnameHelp" placeholder="Enter First Name" autocomplete="off" name="fname" required value="<?php if(isset($_POST['submit'])) echo($_POST['fname'])?>">
  </div>
    
  
      <div class="form-group">
    <label for="exampleInputAddress">Address</label>
    <input type="text" class="form-control" id="address" aria-describedby="addHelp" placeholder="Enter Address" autocomplete="off" name="address" required value="<?php if(isset($_POST['submit'])) echo($_POST['address'])?>">
  </div>
  <h6>Gender:</h6>
<div style="margin: 10px;"><div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="M" checked>
  <label class="form-check-label" for="exampleRadios1">
     Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="F">
  <label class="form-check-label" for="exampleRadios2">
  Female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="O">
  <label class="form-check-label" for="exampleRadios2">
    <img src="other-gender.png" height="20px" width="20px">Other
  </label>
</div>
  
  
  	
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="Password" placeholder="Password" autocomplete="off" name="passwd1" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd1'])?>">
  </div>

    <div class="form-group">
    <label for="exampleInputPassword2">Re-enter Password</label>
    <input type="password" class="form-control" id="Reenter" placeholder="Re-enter Password" name="passwd2" required value="<?php if(isset($_POST['submit'])) echo($_POST['passwd2'])?>">
  </div>
  <small>Choose a password of atleast 8 characters,one lowercase,one uppercase and one special Character.</small>
    <div class="form-group">
    <label for="Date">Date of Birth</label>
    <input type="date" class="form-control" id="date" name="dob" required>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
</form>
 



</body>
</html>

