class EmployeeModel {
    private $conn;

    public function __construct() {
        $servername = "your_servername";    
        $username = "your_username";
        $password = "your_password";
        $dbname = "your_database";

        $this->conn = new mysqli($servername, $username, $password, $dbname);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getEmployees() {
        $sql = "SELECT * FROM employees";
        $result = $this->conn->query($sql);
        $employees = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $employees[] = $row;
            }
        }

        return $employees;
    }

    public function getEmployeeById($id) {
        $sql = "SELECT * FROM employees WHERE id=$id";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        }

        return null;
    }

    public function addEmployee($name, $address, $salary) {
        $sql = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";
        return $this->conn->query($sql);
    }

    public function updateEmployee($id, $name, $address, $salary) {
        $sql = "UPDATE employees SET name='$name', address='$address', salary=$salary WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function deleteEmployee($id) {
        $sql = "DELETE FROM employees WHERE id=$id";
        return $this->conn->query($sql);
    }

    public function closeConnection() {
        $this->conn->close();
    }
}