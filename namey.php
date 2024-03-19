<?php 
$students = array( 
    "Sulav" => array("age" => 20, "grade" => "A"), 
    "Bibek" => array("age" => 21, "grade" => "B"), 
    "Saksham" => array("age" => 19, "grade" => "C") 
); 
echo "<h2>Student Information:</h2>"; foreach ($students as $name => $info) {     echo "Name: $name<br>";     echo "Age: " . $info["age"] . "<br>";     echo "Grade: " . $info["grade"] . "<br><br>"; 
} 
?> 
