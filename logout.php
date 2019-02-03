<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Website | Home</title>
    <link rel="stylesheet" href="css/style2.css">
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
            <a href="logout.php"><li>Log Out</li></a>
          </ul>
        </nav>
        <div class="clearfix"></div>
      </header>
      <section class="main-container3">
      <div class="main-wrapper">
        <?php
          if (isset($_SESSION['u_id'])) {
            echo "You are Loogged in!";
          }
         ?>
      </div>
    </section>
  </body>
  </html>
