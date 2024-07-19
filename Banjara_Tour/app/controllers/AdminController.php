<?php

require_once 'app/models/Admin.php';

class AdminController {

    public static function dashboard() {
        session_start();
        if (!isset($_SESSION['admin_logged_in'])) {
            header('Location: index.php?admin&url=admin/login');
            exit();
        }

        include 'views/admin/header.php';
        include 'views/admin/dashboard.php';
        include 'views/admin/footer.php';
    }

    public static function login() {
        include 'views/admin/login.php';
    }

    public static function authenticate() {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $admin = Admin::authenticate($username, $password);

        if ($admin) {
            session_start();
            $_SESSION['admin_logged_in'] = true;
            header('Location: index.php?admin&url=admin');
        } else {
            header('Location: index.php?admin&url=admin/login&error=Invalid credentials');
        }
    }

    public static function logout() {
        session_start();
        session_destroy();
        header('Location: index.php?admin&url=admin/login');
    }
}

?>