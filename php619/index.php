
<!doctype html>
<html lang="en" >

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>php</title>
    <link rel="icon"        href="images/php.png">
    <!-- css link -->
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="css/style.css">
    <link rel="stylesheet"  href="css/media.css">
  </head>

  <body>
   

   <div class="container mt-3">
     

    <?php 

      //product price calculation
      $first_price = 10;
      $second_price = 20;
      $total_price = $first_price + $second_price;
      echo $total_price;
      echo "<br>";
      //result calculation
      $result = 10 + 5 + 40;
      echo $result;
      echo "<br>";
      //constant
      define("name", "Emon nath");
      echo name;
      echo "<br>";
       
      define("NAME", "EMON");
      $amount = 20;
      echo "Your amount is: $amount";
      echo "<br>";

      //echo vs print
      print("hello");
      echo "hello";
      echo "<br>";

      //datatype
      $name = "text";
      var_dump($name);
      echo "<br>";
     

      //arthmetic
      $number = 30 + 30;
      echo $number;
      echo "<br>";
      $f_number = 20;
      $s_number = 10;
      $R_number = $f_number / $s_number;
      echo $R_number;

      //assignment
      $Qmount = 10;
      $Qmount -= 5;
      echo $Qmount;






    ?>


   </div>


    <!-- script link -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>

  </body>

</html>