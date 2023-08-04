
<?php
require_once 'controllers/EmployeeController.php';

$employeeController = new EmployeeController();

if (isset($_GET['view'])) {
    $id = $_GET['view'];
    $employeeController->viewEmployee($id);
} elseif (isset($_POST['add'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $employeeController->addEmployee($name, $address, $salary);
} elseif (isset($_POST['edit'])) {
    $id = $_POST['#'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $salary = $_POST['salary'];
    $employeeController->updateEmployee($id, $name, $address, $salary);
} elseif (isset($_POST['delete'])) {
    $id = $_POST['#'];
    $employeeController->deleteEmployee($id);
} else {
    $employees = $employeeController->listEmployees();
    include 'views/employees_list.php';
}
?>