<?php

class ProductsController {
    private $db;

    public function __construct() {
        $this->db = new Product();
    }

    public function index() {
        $products = $this->db->getAllProducts();
        View::load('products/index', ['products' => $products]);
    }

    public function show($id) {
        $product = $this->db->getProductById($id);
        View::load('products/show', ['product' => $product, 'title' => 'Product Details']);
    }

    public function create() {
        View::load('products/create', ['title' => 'Create Product']);
    }

    public function store() {
        if (isset($_POST['submit'])) {
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'description' => $_POST['description']
            ];
            $this->db->addProduct($data);
        }
        header('Location: /products');
        exit;
    }

    public function edit($id) {
        $product = $this->db->getProductById($id);
        View::load('products/edit', ['product' => $product, 'title' => 'Edit Product']);
    }

    public function update() {
        if (isset($_POST['submit'])) {
            $data = [
                'id' => $_POST['id'],
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity'],
                'description' => $_POST['description']
            ];
            $this->db->updateProduct($_POST['id'], $data);
        }
        header('Location: /products');
        exit;
    }

    public function delete($id) {
        $this->db->deleteProduct($id);
        header('Location: /products');
        exit;
    }
}
