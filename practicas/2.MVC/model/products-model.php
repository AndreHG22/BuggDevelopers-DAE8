<?php
    class ProductsModel {
        private $database;
        private $products;

        public function __construct() {
            require_once( 'connection.php' );
            $this -> database = Connection :: connect();
            $this -> products = array();
        }

        public function getProducts() {
            $db_query = $this -> database -> query( 'SELECT * FROM products' );

            while( $rows = $db_query -> fetch( PDO :: FETCH_ASSOC ))
                $this -> products[] = $rows;
            
            return $this -> products;
        }

        public function insertProduct( $name, $price, $stock ) {
            $db_query = $this -> database -> query( 'INSERT INTO products(name,price,stock) VALUES("'. $name .'", "'. $price . '", '. $stock . ')' );
        }
    }
?>
