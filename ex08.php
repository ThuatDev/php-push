<?php
require_once 'classes/Products.php';

$products = new Products();

//$products->setName('Sản phẩm 1');
//
//echo $products->getName().'<br/>';

$products->name = 'Sản phẩm 1';
$products->price = 12000;

echo $products->name.'<br/>';
echo $products->price.'<br/>';

echo $products->getPrice().'<br/>';

echo $products->setPrice(12000, 'Unicode').'<br/>';

Products::getSalePrice();

Products::setSalePrice(12000);