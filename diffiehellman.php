<?php
//ini_set('precision', 20);
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"];
    $x1 = $_POST["x1"];
    $b = $_POST["b"];
    $y1 = $_POST["y1"];
    $x2 = ($a**$x1)%$b;  
    echo "X1 = ".$x1;
    echo "<br>";
    echo "X2 = ".$x2;
    $y2 = ($a**$y1)%$b;
    echo "<br>";
    echo "Y1 = ".$x1;
    echo "<br>";
    echo "Y2 = ".$x2;
    $teste0 = ($x2**$y1)%$b;
    $teste1 = ($y2**$x1)%$b;
    if ($teste0 == $teste1) {
        
        echo "<br>Z = ".$teste0;
    }
}
?>
<form method="post" action="<?=$_SERVER["PHP_SELF"];?>">
<label>A</label>
<input type="number" name="a" required>
<label>X1</label>
<input type="number" name="x1" required>
<br>
<br>
<label>B</label>
<input type="number" name="b" required>
<label>Y1</label>
<input type="number" name="y1" required>
<br>
<br>
<input type="submit" value="Gerar Z">
<br>
<hr>
</form>