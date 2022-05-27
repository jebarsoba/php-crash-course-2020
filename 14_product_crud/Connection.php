<?php

class Connection {
    private PDO $pdo;

    public function __construct() {
        $this->pdo = new PDO('mysql:server=localhost;dbname=notes', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getNotes(): bool|array {
        $statement = $this->pdo->prepare("SELECT * FROM notes ORDER BY created_date DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}