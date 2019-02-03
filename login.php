<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website | Home</title>
    <link rel="stylesheet" href="css/style2.css">
      <script>
        function validateForm() {
          var x = document.forms["myForm"]["fname"].value;
          if (x == "") {
            alert("Name must be filled out");
            return false;
          }
        }
      </script>
  </head>
  <body>
    <div id="container">
      <header class="header-fix">
        <div id="left_header">
          <h1>UBT Library</h1>
        </div>
        <nav id="right_header">
          <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="signup.php"><li>Sign Up</li></a>
          </ul>
        </nav>
        <div class="clearfix"></div>
      </header>
      <section class="main-container2">
      <div class="main-wrapper">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo "You are Loogged in!";
          }
         ?>
      </div>
    </section>
      <section class="main-container2">
      <div class="main-wrapper">
        <h2>Log In</h2>
        <form class="signup-form" action="includes/login.inc.php" method="POST" name="myForm" onsubmit="return validateForm()">
          <input type="text" name="uid" placeholder="Username" required>
          <input type="password" name="pwd" placeholder="Password" required>
          <button type="submit" name="submit">Log In</button><br>
          <a href="signup.php">
            Not a member yet? Sign up
          </a>
        </form>
    </div>
  </body>
</html>
