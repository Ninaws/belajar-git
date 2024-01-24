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
     <h2>Aritmatika</h2>
     <?php
         $a = 5;
         $b = 2;
         
         // penjumlahan
         $c = $a + $b;
         echo "$a + $b = $c";
         echo "<hr>";
         
         // pengurangan
         $c = $a - $b;
         echo "$a - $b = $c";
         echo "<hr>";
         
         // perkalian
         $c = $a * $b;
         echo "$a * $b = $c";
         echo "<hr>";
         
         // pembagian
         $c = $a / $b;
         echo "$a / $b = $c";
         echo "<hr>";
         
         // sisa bagi
         $c = $a % $b;
         echo "$a % $b = $c";
         echo "<hr>";
         
         // pangkat
         $c = $a ** $b;
         echo "$a ** $b = $c";
         echo "<hr>";

     ?>
     <h2>Bitwise</h2>
     <?php
         $a = 60;
         $b = 13;
         
         // bitwise AND
         $c = $a & $b;
         echo "$a & $b = $c";
         echo "<br>"; 
         
         // bitwise OR
         $c = $a | $b;
         echo "$a | $b = $c";
         echo "<br>"; 
         
         // bitwise XOR
         $c = $a ^ $b;
         echo "$a ^ $b = $c";
         echo "<br>";
         
         // shift Left
         $c = $a << $b;
         echo "$a << $b = $c";
         echo "<br>";
         
         // shift Right
         $c = $a >> $b;
         echo "$a >> $b = $c";
         echo "<br>";

     ?>
     <h2>Logika</h2>
     <?php
          $a = true;
          $b = false;
          
          // variabel $c akan bernilai false
          $c = $a && $b;
          printf("%b && %b = %b", $a,$b,$c);
          echo "<hr>";
          
          // variabel $c akan bernilai true
          $c = $a || $b;
          printf("%b || %b = %b", $a,$b,$c);
          echo "<hr>";
          
          // variabel $c akan bernilai false
          $c = !$a;
          printf("!%b = %b", $a,$b,$c);
          echo "<hr>";

     ?>
     <h2>Relasi</h2>
     <?php
          $a = 6;
          $b = 2;
          
          // menggunakan operator relasi lebih besar
          $c = $a > $b;
          echo "$a > $b: $c";
          echo "<hr>";
          
          // menggunakan operator relasi lebih kecil
          $c = $a < $b;
          echo "$a < $b: $c";
          echo "<hr>";
          
          // menggunakan operasi relasi lebih sama dengan 
          $c = $a == $b;
          echo "$a == $b: $c";
          echo "<hr>";
          
          // menggunakan operator relasi lebih tidak sama dengan 
          $c = $a != $b;
          echo "$a != $b: $c";
          echo "<hr>";
          
          // menggunakan operator relasi lebih besar sama dengan
          $c = $a >= $b;
          echo "$a >= $b: $c";
          echo "<hr>";
          
          // menggunakan operasi relasi lebih kecil sama dengan 
          $c = $a <= $b;
          echo "$a <= $b: $c";
          echo "<hr>";

     ?>
     <h2>Ternary</h2>
     <?php
         $suka = true;

         // mengunakan operator ternary
         $jawab = $suka ? "iya": "tidak";
         
         // menampilkan jawaban
         echo $jawab;
         ?>
</body>
</html>