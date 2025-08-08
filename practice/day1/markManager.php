<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Mark Manager</title>
</head>
<body>
    
    <?php 
    class student{
        public $name;
        public $mark;
        function __construct ($name, $mark){
            $this->name = $name;
            $this->mark = $mark;
        }
        public function show(){
            echo "Name: $name, Mark: $mark";
        }
    }
    
    $students = [
        new student("Rita", 100),
        new student("Akash", 99),
        new student("Batash", 90),
        new student("Catash", 80),
        new student("Datash", 95)

    ]

    $students[1]->show();

    ?>
</body>
</html>