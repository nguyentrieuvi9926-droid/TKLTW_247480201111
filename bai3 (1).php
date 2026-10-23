<?php
function tinh($x, $y) {
    echo "x = $x, y = $y<br>";
    echo "$x + $y = " . ($x + $y) . "<br>";
    echo "$x - $y = " . ($x - $y) . "<br>";
    echo "$x * $y = " . ($x * $y) . "<br>";
    if ($y != 0) {
        echo "$x / $y = " . ($x / $y) . "<br>";
        echo "$x % $y = " . ($x % $y) . "<br>";
    } else {
        echo "Không thể chia cho 0<br>";
    }
    echo "<hr>";
}

// a. Giá trị cho trước
echo "<h3>a. Cho trước</h3>";
$x = 3; $y = 5;
tinh($x, $y);

// b. Ngẫu nhiên
echo "<h3>b. Ngẫu nhiên</h3>";
$x = rand(1, 10); $y = rand(1, 10);
tinh($x, $y);

// c. Ngẫu nhiên với điều kiện x > y
echo "<h3>c. Ngẫu nhiên, x > y</h3>";
do {
    $x = rand(1, 10);
    $y = rand(1, 10);
} while ($x <= $y);
tinh($x, $y);
?>
