<!DOCTYPE html>
<html lang="vi">
<head><meta charset="UTF-8"><title>Thông tin sinh viên</title></head>
<body>
    <form method="post">
        Họ và tên: <input type="text" name="hoten"><br>
        Ngày sinh: <input type="text" name="ngaysinh"><br>
        Lớp: <input type="text" name="lop"><br>
        Điểm: <input type="text" name="diem"><br>
        <input type="submit" name="gui" value="Xuất thông tin">
    </form>
<?php
if (isset($_POST['gui'])) {
    echo "<h2>THÔNG TIN SINH VIÊN</h2>";
    echo "Họ và tên: " . htmlspecialchars($_POST['hoten']) . "<br>";
    echo "Ngày sinh: " . htmlspecialchars($_POST['ngaysinh']) . "<br>";
    echo "Lớp: " . htmlspecialchars($_POST['lop']) . "<br>";
    echo "Điểm: " . htmlspecialchars($_POST['diem']) . "<br>";
}
?>
</body>
</html>
