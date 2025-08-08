<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student Mark Manager</title>
</head>
<body>
    <h4>Name Mark</h4>
    <?php 
    class student{
        public $name;
        public $mark;
        function __construct ($name, $mark){
            $this->name = $name;
            $this->mark = $mark;
        }
        public function show(){
            echo "Name: $this->name, Mark: $this->mark";
        }
    }
    
    $students = [
        new student("Rita", 100),
        new student("Akash", 100),
        new student("Batash", 100),
        new student("Catash", 100),
        new student("Datash", 100)
    ];

     
    $sum = 0;
    // HTML Table
        echo "<table border='1' cellpadding='5'>
        <tr><th>Name</th><th>Mark</th></tr>";

        foreach($students as $student) {
            echo "<tr><td>{$student->name}</td><td>{$student->mark}</td></tr>";
            $sum += $student->mark;
        }

        echo "</table>";

        // Average
        $avg = $sum / count($students);
        echo "<p><b>Average Mark:</b> " . number_format($avg, 2) . "</p>";

    ?>
</body>
</html>