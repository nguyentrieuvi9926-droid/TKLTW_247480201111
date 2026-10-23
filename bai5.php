<?php
function uscln($a, $b) {
    $a = abs($a); $b = abs($b);
    while ($b != 0) {
        $t = $a % $b;
        $a = $b;
        $b = $t;
    }
    return $a;
}
function bscnn($a, $b) {
    $g = uscln($a, $b);
    return $g == 0 ? 0 : abs($a * $b) / $g;
}

$so1 = $_POST['so1'] ?? '';
$so2 = $_POST['so2'] ?? '';
$ketqua = '';

if (isset($_POST['pheptoan'])) {
    if (filter_var($so1, FILTER_VALIDATE_INT) !== false && filter_var($so2, FILTER_VALIDATE_INT) !== false) {
        $a = (int)$so1; $b = (int)$so2;
        $ketqua = ($_POST['pheptoan'] == 'USCLN') ? uscln($a, $b) : bscnn($a, $b);
    } else {
        $ketqua = 'Vui lòng nhập số nguyên';
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>USCLN và BSCNN</title></head>
<body>
<form method="post">
    <h2>TÍNH USCLN VÀ BSCNN</h2>
    Số thứ 1: <input type="text" name="so1" value="<?= htmlspecialchars($so1) ?>"><br><br>
    Số thứ 2: <input type="text" name="so2" value="<?= htmlspecialchars($so2) ?>"><br><br>
    Kết quả: <input type="text" value="<?= htmlspecialchars($ketqua) ?>" readonly><br><br>
    <input type="submit" name="pheptoan" value="USCLN">
    <input type="submit" name="pheptoan" value="BSCNN">
</form>
</body>
</html>
