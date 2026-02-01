<?php
include __DIR__ . "/views/layouts/header.php";

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/config.php";


use App\Database;

$pdo = Database::getInstance($config)->getConnection();


$page = $_GET['page'] ?? "home";

switch ($page) {
    case "home":
        require "/views/home.php";
        break;
    case "create-product":
        require "views/product/create.php";
        break; 
    case "store-product":
        require "App/Controllers/productController.php";
        break; 
    

}













include __DIR__ . "/views/layouts/footer.php"; ?>