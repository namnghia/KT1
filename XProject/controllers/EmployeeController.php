require_once 'models/EmployeeModel.php';

class EmployeeController {
    private $employeeModel;

    public function __construct() {
        $this->employeeModel = new EmployeeModel();
    }

    public function listEmployees() {
    }

    public function viewEmployee($id) {
    }

    public function addEmployee($name, $address, $salary) {
    }

    public function updateEmployee($id, $name, $address, $salary) {
    }

    public function deleteEmployee($id) {
        
    }
}
