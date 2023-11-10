<form action="array.php" method="GET">
<input type="text" name="xname">
<input type="submit">

</form>
<?php

$xname = $_GET["xname"];

/*
$family = array("Father","Mother","Brother");

$family[1] = "Love";
$family[3] = "Sister";

//echo $family[3];
//echo $family[1];

echo count($family);
*/

$score = [
"Ahmed" => ["Score"=> "90","Grade"=> "A"],
"Khalid" => ["Score"=>"80","Grade"=> "C"],
"Saad" =>["Score"=>"40","Grade"=> "F"],
];

echo "Score: " .$score[$xname]["Score"];
echo "<br>";
echo "Grade: " .$score[$xname]["Grade"];




/*
$family = [
    "Desinger" => "Khalid",
    "Programmer" => "Ahmed",
    "Gamer" =>"Saad"
    ];
    
    echo $family[$xname];
*/
?>