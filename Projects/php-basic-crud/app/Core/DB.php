<?php

class DB {
    private $db;

    public function connect() {
        $database = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($database->connect_error) {
            die("Connection failed: " . $database->connect_error);
        } else {
            $this->db = $database;
            return $this->db;
        }
    }

    public function query($sql) {
        return $this->db->query($sql);
    }

    public function escape($string) {
        return $this->db->real_escape_string($string);
    }

    public function close() {
        $this->database->close();
    }
}