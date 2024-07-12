<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Thông tin sinh viên</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Họ Tên</th>
                <th>Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $thongtin['id'] ?></td>
                <td><?= $thongtin['name'] ?></td>
                <td><?= $thongtin['address'] ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>
