<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website | Home</title>
    <link rel="stylesheet" href="css/style2.css">
  </head>
  <body>
    <div id="container">
      <header>
        <div id="left_header">
          <h1>UBT Library</h1>
        </div>
        <nav id="right_header">
          <ul>
            <a href="index.html"><li>Home</li></a>
            <a href="login.php"><li>Login</li></a>
          </ul>
        </nav>
        <div class="clearfix"></div>
      </header>
      <section class="main-container">
      <div class="main-wrapper">
        <h2>Sign Up</h2>
          <form class="signup-form" action="includes/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="Firstname" required>
            <input type="text" name="last" placeholder="Lastname" required>
            <input type="text" name="email" placeholder="E-mail" required>
            <input type="text" name="uid" placeholder="Username" required>
            <input type="password" name="pwd" placeholder="Password" required>
            <button type="submit" name="submit">Sign up</button><br>
            <a href="login.php">
              Already a member? Log In
            </a>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>
