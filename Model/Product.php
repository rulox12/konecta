<?php

/**
 *
 */
class Product
{
    private $id;
    private $name;
    private $reference;
    private $price;
    private $weight;
    private $category;
    private $stock;
    private $created_at;
    private $last_sale;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getLastSale()
    {
        return $this->last_sale;
    }

    /**
     * @param mixed $last_sale
     */
    public function setLastSale($last_sale)
    {
        $this->last_sale = $last_sale;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock)
    {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getStock()
    {
        return $this->stock;
    }

    public static function save(Product $product)
    {
        $db = Db::getConnect();

        try {
            $insert = $db->prepare('INSERT INTO product VALUES (NULL, :name,:reference,:price,:weight,:category,:stock,:created_at,:last_sale)');
            $insert->bindValue('name', $product->getName());
            $insert->bindValue('reference', $product->getReference());
            $insert->bindValue('price', $product->getPrice());
            $insert->bindValue('weight', $product->getWeight());
            $insert->bindValue('category', $product->getCategory());
            $insert->bindValue('stock', $product->getStock());
            $insert->bindValue('created_at', $product->getCreatedAt());
            $insert->bindValue('last_sale', $product->getLastSale());
            $insert->execute();
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function all()
    {
        $db = Db::getConnect();
        $productList = [];

        $select = $db->query('SELECT * FROM product order by id');

        foreach ($select->fetchAll() as $productSave) {
            $product = new Product();

            $product->setId($productSave['id']);
            $product->setName($productSave['name']);
            $product->setReference($productSave['reference']);
            $product->setPrice($productSave['price']);
            $product->setWeight($productSave['weight']);
            $product->setCategory($productSave['category']);
            $product->setStock($productSave['stock']);
            $product->setCreatedAt($productSave['created_at']);
            $product->setLastSale($productSave['last_sale']);

            $productList[] = $product;
        }
        return $productList;
    }

    public static function searchById($id)
    {
        $db = Db::getConnect();
        $select = $db->prepare('SELECT * FROM product WHERE id=:id');
        $select->bindValue('id', $id);
        $select->execute();

        $productDb = $select->fetch();

        $product = new Product();

        $product->setId($productDb['id']);
        $product->setName($productDb['name']);
        $product->setReference($productDb['reference']);
        $product->setPrice($productDb['price']);
        $product->setWeight($productDb['weight']);
        $product->setCategory($productDb['category']);
        $product->setStock($productDb['stock']);


        return $product;

    }

    public static function update(Product $product)
    {
        $db = Db::getConnect();

        $update = $db->prepare('UPDATE product SET name=:name, reference=:reference, price=:price , weight=:weight, category=:category, stock=:stock WHERE id=:id');
        $update->bindValue('name', $product->getName());
        $update->bindValue('reference', $product->getReference());
        $update->bindValue('price', $product->getPrice());
        $update->bindValue('weight', $product->getWeight());
        $update->bindValue('category', $product->getCategory());
        $update->bindValue('stock', $product->getStock());
        $update->bindValue('id', $product->getId());

        $update->execute();
    }

    public static function delete($id)
    {
        $db = Db::getConnect();
        $delete = $db->prepare('DELETE  FROM product WHERE id=:id');
        $delete->bindValue('id', $id);
        $delete->execute();
    }
}

?>
