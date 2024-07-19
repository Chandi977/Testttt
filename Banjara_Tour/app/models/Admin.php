<?php

require_once 'config/config.php';

class Admin {
    public static function authenticate($username, $password) {
        $conn = connectDB();
        $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
        $stmt->bind_param('ss', $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}

?>