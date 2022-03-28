<!DOCTYPE html>
<html>
  <head>
    <title>Home page</title>
  </head>
  <body>
    <nav>
        <a href="index.php"></a>
        <ul>
          <li><a href="index.php">home</a></li>
          <li><a href="signup.php">signup</a></li>
          <li><a href="login.php">login</a></li>
        </ul>
      </div>
    </nav>

<h2>Sign Up</h2>
<form action="includes/signup.inc.php" method="post">
  <input type="text" name="firstName" placeholder="First name">
  <input type="text" name="lastName" placeholder="Last name">
  <input type="text" name="uid" placeholder=" Username">
  <input type="password" name="pwd" placeholder="Password">
  <input type="password" name="pwdrepeat" placeholder="confirm Password">
  <button type="submit" name="submit">Sign up</button>
</form>

<?php
  if (isset($_GET['error'])) {
    if ($_GET['error'] == "emptyinput") {
      echo"<p>Fill in all fields</p>";
    }
    else if ($_GET['error'] == "invaliduid") {
      echo"<p>Choose a proper username!</p>"
    }

    else if ($_GET['error'] == "pwdmatch") {
      echo"<p>passwords dont match  !</p>"
    }
    else if ($_GET['error'] == "uidExcists") {
      echo"<p>Choose a proper username!</p>"
    }
  }