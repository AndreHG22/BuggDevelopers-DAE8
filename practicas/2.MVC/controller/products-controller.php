<?php
    require_once( 'model/products-model.php' );
    
    $products = new ProductsModel();
    $products_table = $products -> getProducts();

    if( isset($_POST['insert']) ) {
        print_r($_POST);
        $name = $_POST['name'];
        $price = $_POST['price'];
        $stock = $_POST['stock'];
        echo $name . " " . $price . " " . $stock;
        $products -> insertProduct( $name, $price, $stock );
    }

    require_once( 'view/products-view.php' );
?>
