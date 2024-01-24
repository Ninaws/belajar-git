<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

     <style>
        body {
            background-image: url(nina.jpeg);
        }
     </style>

</head>
<body>
     <!--kreatif-->
     <div class="container">
         <div class="popup open-popup" id="popup">
            <div class="nina">
                <img src="1.jpeg" alt="" style="width: 9rem"/>
             <div class="paragrap">
             <h2>Ninawulansari</h2>
            </div>
             </div>
         </div>
     </div>
   <h2>Global</h2>
   <?php
   $x = 5;
   $y = 10;

   function myTest1() {
    global $x, $y;
    $y = $x + $y;
  } 
  
   myTest1();  // run function
   echo $y; // output the new value for variable $y
  
   //kata kunci global digunakan untuk mengakses variabel global dari dalam suatu fungsi.
  
   ?> 
   <h2>Local</h2>
   <?php
     $x = 5; // global scope
 
     function myTest2() {
      global $x;
       // using x inside this function will generate an error
       echo "<p>Variable x inside function is: $x</p>";
    } 
    
     myTest2();
     echo "<p>Variable x outside function is: $x</p>";

   ?>
   <h2>static</h2>
   <?php
     function myTest3() {
      static $x = 0;
      echo $x;
      $x++;
    }
    myTest1();
   echo "<br>";
   myTest2();
   echo "<br>";
   myTest3();
   ?>
</body>
</html>
        