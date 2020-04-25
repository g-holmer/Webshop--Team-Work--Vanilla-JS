<?php

// don't allow get requests
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die();
}

require_once __DIR__ . "/../model/db.php";
header("Content-Type: application/json; charset=UTF-8");

// get ids of new products
$newIds = [];
$newIdsSql = DB::run("
    SELECT id
    FROM product
    ORDER BY id DESC
    LIMIT 2
");
while ($tableRow = $newIdsSql->fetch(PDO::FETCH_LAZY)) {
    $newIds[$tableRow['id']] = true;
}

// get ids of old product
$oldIds = [];
$oldIdsSql = DB::run("
    SELECT id
    FROM product
    ORDER BY id ASC
    LIMIT 2
");
while ($tableRow = $oldIdsSql->fetch(PDO::FETCH_LAZY)) {
    $oldIds[$tableRow['id']] = true;
}

// get product info
$selectProducts = DB::run("
    SELECT product.id,
    product.title,
    product_category.name as category,
    product_category.id as categoryId,
    product.description,
    price_of_product.amount as price,
    currency.shorthand as currency,
    product.number_in_stock
    FROM product, product_category, price_of_product, currency
    WHERE product.category_id = product_category.id
    AND product.id = price_of_product.product_id
    AND currency.id = price_of_product.currency_id
    ORDER BY id ASC
");

$response = [];
while ($tableRow = $selectProducts->fetch(PDO::FETCH_LAZY)) {

    $product = [
        "id" => $tableRow['id'],
        "title" => $tableRow['title'],
        "description" => $tableRow['description'],
        "category" => $tableRow['category'],
        "categoryId" => $tableRow['categoryId'],
        "price" => $tableRow['price'],
        "currency" => $tableRow['currency'],
        "numberInStock" => $tableRow['number_in_stock'],
    ];

    $pid = strval($tableRow['id']);
    if (isset($newIds[$pid])) {$product['new'] = true;}
    if (isset($oldIds[$pid])) {$product['old'] = true;}

    $imgSql = "
        SELECT file_name
        FROM product, image_of_product
        WHERE product.id = image_of_product.product_id AND product.id = ?
    ";
    $selectProductImages = DB::run($imgSql, [$tableRow['id']]);

    $imageGallery = [];
    while ($imgRow = $selectProductImages->fetch(PDO::FETCH_LAZY)) {array_push($imageGallery, $imgRow['file_name']);}
    $product["imageGallery"] = $imageGallery;

    array_push($response, $product);
}

echo json_encode($response, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);