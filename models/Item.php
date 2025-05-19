<?php
require_once 'config/database.php';

class Item {
    public static function all() {
        $db = (new Database())->getConnection();
        $stmt = $db->query("SELECT * FROM items");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        $db = (new Database())->getConnection();
        $stmt = $db->prepare("SELECT * FROM items WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function create($name, $description) {
        $db = (new Database())->getConnection();
        $stmt = $db->prepare("INSERT INTO items (name, description) VALUES (?, ?)");
        $stmt->execute([$name, $description]);
    }

    public static function update($id, $name, $description) {
        $db = (new Database())->getConnection();
        $stmt = $db->prepare("UPDATE items SET name = ?, description = ? WHERE id = ?");
        $stmt->execute([$name, $description, $id]);
    }

    public static function delete($id) {
        $db = (new Database())->getConnection();
        $stmt = $db->prepare("DELETE FROM items WHERE id = ?");
        $stmt->execute([$id]);
    }
}
?>
