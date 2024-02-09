<?php 

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

// DatabaseConnection.php
class DatabaseConnection {
    private $host = "localhost";
    private $user = "niel";
    private $password = "123";
    private $database = "admin";
    private $conn;

    public function __construct() {

        
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}

// User.php
class User {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function login($username, $password) {
        $conn = $this->db->getConnection();
        $stmt = $conn->prepare("SELECT * FROM account WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result->num_rows > 0;
    }
}

// Usage
$db = new DatabaseConnection();
$user = new User($db);

if ($user->login($_POST['username'], $_POST['password'])) {
    echo "Login successful!";
    // Redirect to another page
   header("Location: homepage.php");
    exit();
} else {
    echo "Invalid login credentials!";
}

}

?>