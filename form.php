<form action ="form.php" method="GET">
Name: <input type="text" name="f_name">
<br>
Last: <input type="text" name="l_name">
<br>
<input type="submit" >
</form>

<?php

echo $_GET["f_name"];
echo $_GET["l_name"];



?>