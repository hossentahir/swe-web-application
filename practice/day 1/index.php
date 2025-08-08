<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <h1>hello</h1> -->
    <?php
        echo "<h1>hello brother how are you?</h1>";

        class Car{
            public $brand;
            public $model;
            public function __construct ($brand, $model){
                $this->brand = $brand;
                $this->model = $model;

            }

            public function info(){
                echo "Brand: $this->brand, Model: $this->model" ;
            }
        }
        $car1 = new Car("MARCEDIS", "M205");
        $car1->info();

          
    ?>
</body>
</html>