<?php
// Calculator
$number1 = $_GET["number1"];
$number2 = $_GET["number2"];
$op = $_GET["op"];

function add($x, $y) {
    return $x + $y;
}
function multiply($x, $y) {
    return $x * $y;
}

function divide($x, $y) {
    return $x / $y;
}
function decrease($x, $y) {
    return $x - $y;
}


if(!empty($number1) &&!empty($number2) && !empty($op)) {
    if($op === "+") {
        $result = add($number1,$number2);
    } elseif($op === "-") {
        $result = decrease($number1,$number2);
    } elseif($op === "*") {
        $result = multiply($number1,$number2);
    } elseif($op === "/") {
        $result = divide($number1,$number2);
        }
}




/*
if(empty($number1)) {
    $result = "الرقم الأول فارغ";
} elseif(empty($number2)) {
    $result = "الرقم الثاني فارغ";
} else if(empty($op)) {
    $result = "يرجى ادخال العملية";
} else {

}
*/

//$result = $_GET["number1"] + $_GET["number2"];


?>



<head>
    <link rel="stylesheet" href="boostrap.min.css" >  
</head>

<body>
<div class="container">

<form action="calc.php" method="GET" class="form">
<div>
    <label>Enter Number1:</label>
    <input type="number" id="num1" name="number1"class="form-control">
</div>
<br>
<div>
<label>Enter Number2</label>
<input type="number" id="num2" name="number2" class="form-control">
</div>
<br>
<div>
<label>العملية:</label>
<input type="text" name="op" class="from-control">
</div>
<br>
<div class ="alert alert-success">

<?php echo $result ?>
</div>
<br>

<input type="submit"class="btn btn-primary">
</form>
</div>

</body>
