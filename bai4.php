<?php
$so1 = $_POST['so1'] ?? '';
$so2 = $_POST['so2'] ?? '';
$ketqua = '';

if (isset($_POST['pheptoan']) && is_numeric($so1) && is_numeric($so2)) {
    switch ($_POST['pheptoan']) {
        case 'Cộng': $ketqua = $so1 + $so2; break;
        case 'Trừ':  $ketqua = $so1 - $so2; break;
        case 'Nhân': $ketqua = $so1 * $so2; break;
        case 'Chia': $ketqua = ($so2 != 0) ? $so1 / $so2 : 'Không chia được cho 0'; break;
        case 'Mod':  $ketqua = ($so2 != 0) ? fmod($so1, $so2) : 'Không chia được cho 0'; break;
    }
} elseif (isset($_POST['pheptoan'])) {
    $ketqua = 'Vui lòng nhập số hợp lệ';
}
?>
<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Tính toán số học</title></head>
<body>
<form method="post">
    <h2>TÍNH TOÁN SỐ HỌC</h2>
    Số thứ 1: <input type="text" name="so1" value="<?= htmlspecialchars($so1) ?>"><br><br>
    Số thứ 2: <input type="text" name="so2" value="<?= htmlspecialchars($so2) ?>"><br><br>
    Kết quả: <input type="text" value="<?= htmlspecialchars($ketqua) ?>" readonly><br><br>
    <input type="submit" name="pheptoan" value="Cộng">
    <input type="submit" name="pheptoan" value="Trừ">
    <input type="submit" name="pheptoan" value="Nhân">
    <input type="submit" name="pheptoan" value="Chia">
    <input type="submit" name="pheptoan" value="Mod">
</form>
</body>
</html>
