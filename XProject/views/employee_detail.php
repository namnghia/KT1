<!DOCTYPE html>
<html>
<head>
    <title>list of employees</title>
</head>
<body>
    <h1>LIST OF EMPLOYEES</h1>
    <?php
    $id = $_GET['id'];
    $employee = $controller->getEmployeeById($id);

    if ($employee) {
        echo "<p>name: " . $employee['name'] . "</p>";
        echo "<p>address: " . $employee['address'] . "</p>";
        echo "<p>salary: " . $employee['salary'] . "</p>";
    } else {
        echo "<p>employee does not exist.</p>";
    }
    ?>
</body>
</html>