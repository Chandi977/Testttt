<?php

require_once 'app/models/Tour.php';

class TourController {

    public static function index() {
        $tours = Tour::all();
        include 'views/common/header.php';
        include 'views/tours/list.php';
        include 'views/common/footer.php';
    }

    public static function create() {
        include 'views/common/header.php';
        include 'views/tours/create.php';
        include 'views/common/footer.php';
    }

    public static function store() {
        $tour = new Tour($_POST['name'], $_POST['description'], $_POST['price']);
        $tour->save();
        header('Location: index.php?url=tours');
    }

    public static function edit($id) {
        $tour = Tour::find($id);
        include 'views/common/header.php';
        include 'views/tours/edit.php';
        include 'views/common/footer.php';
    }

    public static function update($id) {
        $tour = Tour::find($id);
        $tour->name = $_POST['name'];
        $tour->description = $_POST['description'];
        $tour->price = $_POST['price'];
        $tour->save();
        header('Location: index.php?url=tours');
    }

    public static function show($id) {
        $tour = Tour::find($id);
        include 'views/common/header.php';
        include 'views/tours/show.php';
        include 'views/common/footer.php';
    }

    public static function delete($id) {
        $tour = Tour::find($id);
        $tour->delete();
        header('Location: index.php?url=tours');
    }
}

?>