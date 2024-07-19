<?php

require_once 'app/controllers/TourController.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ($_GET['url'] === 'tours') {
        TourController::index();
    } elseif ($_GET['url'] === 'tours/create') {
        TourController::create();
    } elseif ($_GET['url'] === 'tours/edit') {
        TourController::edit($_GET['id']);
    } elseif ($_GET['url'] === 'tours/show') {
        TourController::show($_GET['id']);
    } else {
        // Load a default view or a 404 page
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['url'] === 'tours/store') {
        TourController::store();
    } elseif ($_POST['url'] === 'tours/update') {
        TourController::update($_POST['id']);
    } elseif ($_POST['url'] === 'tours/delete') {
        TourController::delete($_POST['id']);
    }
}

?>