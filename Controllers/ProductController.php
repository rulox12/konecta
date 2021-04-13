<?php

class ProductController
{
    function index()
    {
        require_once('Views/products/welcome.php');
    }

    function register()
    {
        require_once('Views/products/register.php');
    }

    function save()
    {
        $product = new Product();

        $product->setName($_POST['name']);
        $product->setReference($_POST['reference']);
        $product->setPrice($_POST['price']);
        $product->setWeight($_POST['weight']);
        $product->setCategory($_POST['category']);
        $product->setStock($_POST['stock']);
        $product->setCreatedAt(date('Y-m-d H:i:s'));
        $product->setLastSale($_POST['last_sale']);

        Product::save($product);

        $this->show();
    }

    function show()
    {
        $productList = Product::all();

        require_once('Views/products/show.php');
    }

    function updateshow()
    {
        $id = $_GET['productId'];
        $product = Product::searchById($id);
        require_once('Views/products/updateshow.php');
    }

    function update()
    {
        $product = new Product();

        $product->setName($_POST['name']);
        $product->setReference($_POST['reference']);
        $product->setPrice($_POST['price']);
        $product->setWeight($_POST['weight']);
        $product->setCategory($_POST['category']);
        $product->setStock($_POST['stock']);

        Product::update($product);

        $this->show();
    }

    function delete()
    {
        $id = $_GET['id'];
        Product::delete($id);
        $this->show();
    }

    function search()
    {
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $product = Product::searchById($id);
            $productList[] = $product;

            require_once('Views/products/show.php');
        } else {
            $productList = Product::all();

            require_once('Views/products/show.php');
        }
    }

    function error()
    {
        require_once('Views/products/error.php');
    }

}

?>
