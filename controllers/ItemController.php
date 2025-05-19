<?php
require_once 'models/Item.php';

class ItemController {
    public function index() {
        $items = Item::all();
        include 'views/item/index.php';
    }

    public function create() {
        include 'views/item/create.php';
    }

    public function store() {
        Item::create($_POST['name'], $_POST['description']);
        header('Location: index.php');
    }

    public function edit($id) {
        $item = Item::find($id);
        include 'views/item/edit.php';
    }

    public function update($id) {
        Item::update($id, $_POST['name'], $_POST['description']);
        header('Location: index.php');
    }

    public function delete($id) {
        Item::delete($id);
        header('Location: index.php');
    }
}
?>
