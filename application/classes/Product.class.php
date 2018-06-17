<?php
    class Product extends AbstractClass {
        public function __construct ($db) {
            parent::__construct($db);
        }
        public function findProduct(array $productType) {
            $req = "SELECT *
            FROM product
            WHERE type = ?";
            return $this->database->query($req, $productType);
        }
        public function findAllProducts() {
            $req = "SELECT *
            FROM product
            WHERE is_active=1 ";
            return $this->database->query($req);
        }
    }

