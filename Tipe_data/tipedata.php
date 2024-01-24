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
     <h2>Array</h2>
     <?php 
         $cars = array("Volvo","BMW","Toyota");
         var_dump($cars);
     // Array menyimpan banyak nilai dalam satu variabel.

     ?>
     <h2>Boolean</h2>
     <?php
         $x = true;
         var_dump($x);
     // Boolean mewakili dua kemungkinan keadaan TRUE atau FALSE.

     ?>
     <h2>Float</h2>
     <?php  
         $x = 10.365;
         var_dump($x);
         // Float (angka floating point) adalah bilangan dengan titik desimal atau bilangan dalam bentuk eksponensial
     ?> 
     <h2>Float</h2> 
     <?php
         $x = 5985;
         var_dump($x);
          // Tipe data integer adalah bilangan non-desimal di antara keduanya.
     ?>
     <h2>Null</h2>
     <?php
         $x = "Hello world!";
         $x = null;
         var_dump($x);
         // Variabel bertipe data NULL adalah variabel yang tidak mempunyai nilai yang ditetapkan padanya.
     ?>
     <h2>Object</h2>
     <?php
         class Car {
         public $color;
         public $model;
         public function __construct($color, $model) {
             $this->color = $color;
             $this->model = $model;
         }
             public function message() {
             return "My car is a " . $this->color . " " . $this->model . "!";
            }
         }
         
         $myCar = new Car("red", "Volvo");
         var_dump($myCar);
         // Kelas dan objek adalah dua aspek utama pemrograman berosientasi objek.
     ?>
     <h2>Object</h2>
     <?php
         $x = "Hello world!";
         $y = 'Hello world!';
        
         var_dump($x);
         echo "<br>";
         var_dump($y)  
         // String dapat berupa texs apa pun di dalam tanda kutip. anda menggunakan tanda kutip tuggal atau ganda.
     ?>
     <h2>Resource</h2>
     <?php
         // Tipe sumber daya khusus bukanlah tipe data sebenarnya ini adalah penyimpanan referensi ke fungsi dan sumber daya di luar php.
     ?>
</body>
</html>
        
