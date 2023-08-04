<!DOCTYPE html>
<html>
<head>
    <title>Danh sách nhân viên</title>
</head>
<body>
    <h1>Danh sách nhân viên</h1>
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Address</th>
            <th>Salary</th>
            <th>Action</th>
        </tr>
        <?php foreach ($employees as $employee): ?>
        <tr>
            <td><?php echo $employee['id']; ?></td>
            <td><?php echo $employee['name']; ?></td>
            <td><?php echo $employee['address']; ?></td>
            <td><?php echo $employee['salary']; ?></td>
            <td><a href="index.php?view=<?php echo $employee['id']; ?>">Xem chi tiết</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>