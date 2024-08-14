<?php
    require_once("Connection.class.php");

    class Products extends Connection{
        public function addNewProdcut($productname, $productcategory, $brandname, $manufacturedate, $expirydate, $material, $packaging, $dimention, $color, $weight, $productdescription, $country, $handling, $sku, $price, $discount, $warranty, $minimumorder){
            $sqlQuery = "insert into products (productname, productcategory, brandname, manufacturedate, expirydate, material, packaging, dimention, color, weight, productdescription, country, handling, sku, price, discount, warranty, minimumorder) values ('$productname', $productcategory, '$brandname', '$manufacturedate', '$expirydate', '$material', '$packaging', '$dimention', '$color', '$weight', '$productdescription', '$country', '$handling', '$sku', '$price', '$discount', '$warranty', '$minimumorder')";

            $this->connection->query($sqlQuery);

            return $this->connection->insert_id;
        }

        public function addProductMedia($productid, $filepath, $mediatype){
            $sqlQuery = "insert into productimages (productid, filepath, mediatype) values ($productid, '$filepath', '$mediatype')";
            $this->connection->query($sqlQuery);
        }

        public function getAllCategory(){
            $sqlQuery = "select categoryid, categoryname from category";
            return $this->connection->query($sqlQuery);
        }

        public function getAllProducts(){
            $sqlQuery = "select products.productid, products.productname, products.price, products.status, category.categoryname from products inner join category on products.productcategory = category.categoryid";
            return $this->connection->query($sqlQuery);
        }

        public function changeProductStatus($productid, $status){
            $sqlQuery = "update products set status = $status where productid = $productid";
            $this->connection->query($sqlQuery);
        }

        public function deleteProduct($productid){
            // delete product media
            $sqlQuery = "select filepath from productimages where productid = $productid";
            $result = $this->connection->query($sqlQuery);

            while($row = $result->fetch_assoc()){
                unlink($row["filepath"]);
            }

            $sqlQuery = "delete from productimages where productid = $productid";
            $this->connection->query($sqlQuery);

            $sqlQuery = "delete from products where productid = $productid";
            $this->connection->query($sqlQuery);
        }

        public function getOneProduct($productid){
            $sqlQuery = "select * from products where productid = $productid";
            return $this->connection->query($sqlQuery);
        }

        public function getProductMedia($productid){
            $sqlQuery = "select * from productimages where productid = $productid";
            return $this->connection->query($sqlQuery);
        }

        public function deleteProductImage($productimageid){
            $sqlQuery = "select filepath from productimages where productimageid = $productimageid";
            $result = $this->connection->query($sqlQuery);
            $row = $result->fetch_array();
            unlink($row["filepath"]);

            $sqlQuery = "delete from productimages where productimageid = $productimageid";
            $this->connection->query($sqlQuery);
        }

        public function updateProduct($productid, $productname, $productcategory, $brandname, $manufacturedate, $expirydate, $material, $packaging, $dimention, $color, $weight, $productdescription, $country, $handling, $sku, $price, $discount, $warranty, $minimumorder){
            $sqlQuery = "update products set productname = '$productname', productcategory = '$productcategory', brandname = '$brandname', manufacturedate = '$manufacturedate', expirydate = '$expirydate', material = '$material', packaging = '$packaging', dimention = '$dimention', color = '$color', weight = '$weight', productdescription = '$productdescription', country = '$country', handling = '$handling', sku = '$sku', price = '$price', discount = '$discount', warranty = '$warranty', minimumorder ='$minimumorder' where productid = $productid";

            $this->connection->query($sqlQuery);
        }
    }

    $products = new Products();
?>