<?php
require_once __DIR__ . '/../model/getProductPreviews.php';
$products = getProducts();
require_once __DIR__ . '/../view/listProductPreviews.php';