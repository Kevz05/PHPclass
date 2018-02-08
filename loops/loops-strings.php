<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset = "utf-8"/>
    <title>Loops & Strings</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css"/>
</head>

<body>

<div class = "page-wrap">
    <header class="site-header">
        <?php include "../includes/header.php" ?>
    </header>
    <div class="flex-box">
        <nav class = "main-nav">
            <?php include "../includes/menu.php" ?>
        </nav>

        <section class="main-content">
            <div class="transbox">
                <h2>Loops & Strings</h2>
                <div class="content" style="text-align: center;">
                  <p>
                      <?php
                        $number = 100;

                        $result = "<h1>";
                        $result .= $number;
                        $result .= "</h1>";

                        echo $result;
                        echo "<h1>" . $number . "</h1>";
                        //echo $number;

                      $number1 = 150;
                      $number2 = 50;

                      $number = $number1 + $number2;
                      echo $number;

                      //Loops
                      $i = 1;
                      while ($i < 7){
                          echo "<h$i>Hello World!</h$i>";
                          $i++;
                      }

                      $i = 6;
                      while ($i > 0){
                          echo "<h$i>Hello World!</h$i>";
                          $i--;
                      }


                      // Do Loop
                      $i = 6;
                      do{
                          echo "<h$i>Hello World!</h$i>";
                          $i--;
                      }
                      while($i > 0);


                      //For Loop
                      for($i = 1; $i < 7; $i++){
                          echo "<h$i>Hello World!</h$i>";
                      }



                      //Strings
                      $full_name = "Doug Smith";
                      $position = strpos($full_name, " ");
                      echo $position;

                      echo "<br><hr><br>";

                      echo $full_name;
                      echo "<br>";

                      $full_name = strtoupper($full_name);
                      echo $full_name;
                      $full_name = strtolower($full_name);
                      echo "<br>";
                      echo $full_name;
                      echo "<br><hr><br>";

                      $nameParts = explode(' ', $full_name);
                      echo $nameParts[0];
                      echo "<br>";
                      echo $nameParts[1];





                      ?>
                  </p>
                </div>
            </div>
        </section>

        <aside class="right-sidebar">Sidebar</aside>

    </div> <!-- flex box ends -->


    <footer>
        <?php include "../includes/footer.php" ?>
    </footer>


</div> <!-- /page-wrap -->
</body>

</html>