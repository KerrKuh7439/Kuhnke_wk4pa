<?php

class Product
{
    private $db;

    public function __construct()
    {
        $host = "localhost";
        $dbname = "sdc310_wk4pa";
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO(
                "mysql:host=$host;dbname=$dbname",
                $username,
                $password
            );

            $this->db->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public function getProducts()
    {
        $sql = "SELECT ProductNo, Name, Type FROM products";
        $statement = $this->db->prepare($sql);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>