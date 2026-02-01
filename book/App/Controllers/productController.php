<?php

use App\Book;


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $isbn = $_POST['isbn'];
    $pages = $_POST['pages'];
    $language = $_POST['language'];
    $cover_image = $_FILES['cover_image'] ?? null;


    $newBook = Book::create($db, [
        'title' => $title,
        'price' => $price,
        'description' => $description,
        'stock' => $stock,
        'isbn' => $isbn,
        'pages' => $pages,
        'language' => $language,
        'cover_image' => $cover_image
    ]);
    
    



}