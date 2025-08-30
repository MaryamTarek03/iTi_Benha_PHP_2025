<?php

class Product extends DB{
    private $table = 'products';
    private $conn;

    public function __construct() {
        $this->conn = $this->connect();
    }

    public function getAllProducts() {
        // instead of $this->conn->get('products')
        $sql = "SELECT * FROM " . $this->table;
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($id) {
        $sql = "SELECT * FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    public function addProduct($data) {
        // instead of $db->insert('products', $data);
        $sql = "INSERT INTO " . $this->table . " (name, price, quantity, description) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdis", $data['name'], $data['price'], $data['quantity'], $data['description']);
        return $stmt->execute();
    }

    public function updateProduct($id, $data) {
        // instead of $db->update('products', $data, ['id' => $id]);
        $sql = "UPDATE " . $this->table . " SET name = ?, price = ?, quantity = ?, description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sdisi", $data['name'], $data['price'], $data['quantity'], $data['description'], $id);
        return $stmt->execute();
    }

    public function deleteProduct($id) {
        // instead of $this->db->connect()->where('id',$id);
        $sql = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}