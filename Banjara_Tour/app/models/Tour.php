<?php

require_once 'config/config.php';

class Tour {
    public $id;
    public $name;
    public $description;
    public $price;

    public function __construct($name, $description, $price) {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }

    public static function all() {
        $conn = connectDB();
        $result = $conn->query("SELECT * FROM tours");
        $tours = [];

        while ($row = $result->fetch_assoc()) {
            $tour = new Tour($row['name'], $row['description'], $row['price']);
            $tour->id = $row['id'];
            $tours[] = $tour;
        }

        return $tours;
    }

    public static function find($id) {
        $conn = connectDB();
        $stmt = $conn->prepare("SELECT * FROM tours WHERE id = ?");
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $tour = new Tour($row['name'], $row['description'], $row['price']);
        $tour->id = $row['id'];

        return $tour;
    }

    public function save() {
        $conn = connectDB();

        if ($this->id) {
            $stmt = $conn->prepare("UPDATE tours SET name = ?, description = ?, price = ? WHERE id = ?");
            $stmt->bind_param('ssdi', $this->name, $this->description, $this->price, $this->id);
        } else {
            $stmt = $conn->prepare("INSERT INTO tours (name, description, price) VALUES (?, ?, ?)");
            $stmt->bind_param('ssd', $this->name, $this->description, $this->price);
        }

        $stmt->execute();
    }

    public function delete() {
        $conn = connectDB();
        $stmt = $conn->prepare("DELETE FROM tours WHERE id = ?");
        $stmt->bind_param('i', $this->id);
        $stmt->execute();
    }
}

?>