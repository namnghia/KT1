require_once 'models/EmployeeModel.php';

class EmployeeController {
    private $employeeModel;

    public function __construct($servername, $username, $password, $dbname) {
        $this->employeeModel = new EmployeeModel($servername, $username, $password, $dbname);
    }

    public function getAllEmployees() {
        return $this->employeeModel->getAllEmployees();
    }

    public function getEmployeeById($id) {
        return $this->employeeModel->getEmployeeById($id);
    }

    public function addEmployee($name, $address, $salary) {
        return $this->employeeModel->addEmployee($name, $address, $salary);
    }

    public function updateEmployee($id, $name, $address, $salary) {
        return $this->employeeModel->updateEmployee($id, $name, $address, $salary);
    }

    public function deleteEmployee($id) {
        return $this->employeeModel->deleteEmployee($id);
    }
}