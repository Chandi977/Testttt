<?php

require_once 'app/controllers/AdminController.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['url'] === 'admin') {
        AdminController::dashboard();
    } elseif ($_GET['url'] === 'admin/login') {
        AdminController::login();
    } elseif ($_GET['url'] === 'admin/logout') {
        AdminController::logout();
    } else {
        // Load a default admin view or a 404 page
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['url'] === 'admin/authenticate') {
        AdminController::authenticate();
    }
}

?>