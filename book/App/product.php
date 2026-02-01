<?php

namespace App;
use PDO;

use App\Traits\ManagesFiles;

class Book
{
    use ManagesFiles;
    private int $id;
    private string $title;
    private float $price;
    private ?string $description;
    private int $stock;
    private ?string $isbn;
    private ?int $pages;
    private ?string $language;
    private ?string $cover_image;
    private ?string $created_at;

    public function __construct(
        int $id,
        string $title,
        float $price,
        ?string $description = null,
        int $stock = 0,
        ?string $isbn = null,
        ?int $pages = null,
        ?string $language = null,
        ?string $cover_image = null,
        ?string $created_at = null
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
        $this->isbn = $isbn;
        $this->pages = $pages;
        $this->language = $language;
        $this->cover_image = $cover_image;
        $this->created_at = $created_at;
    }

    /* ================= GETTERS ================= */

    public function getId(): int
    {
        return $this->id;
    }
    public function getTitle(): string
    {
        return $this->title;
    }
    public function getPrice(): float
    {
        return $this->price;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function getStock(): int
    {
        return $this->stock;
    }
    public function getIsbn(): ?string
    {
        return $this->isbn;
    }
    public function getPages(): ?int
    {
        return $this->pages;
    }
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    public function getCoverImage(): ?string
    {
        return $this->cover_image;
    }
    public function getCreatedAt(): ?string
    {
        return $this->created_at;
    }

    /* ================= CREATE ================= */

    public static function create(PDO $pdo, array $data): ?Book
    {   
        $imageName = null ;
        if($data['cover_image'] && is_array($data['cover_image'])){
            $imageName = ManagesFiles::uploadFile($data['cover_image'], 'books');
        }
        $stmt = $pdo->prepare("
            INSERT INTO books
            (title, description, price, stock, isbn, pages, language, cover_image)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)
        ");
      
        $success = $stmt->execute([
            $data['title'],
            $data['description'] ?? null,
            $data['price'],
            $data['stock'] ?? 0,
            $data['isbn'] ?? null, 
            $data['pages'] ?? null,
            $data['language'] ?? null,
            $imageName

        ]);

        if ($success) {
            $id=(int) $pdo->lastInsertId();
            return new self(
                $id,
                $data['title'],
                (float) $data['price'],
                $data['description'] ?? null,
                (int) ($data['stock'] ?? 0),
                $data['isbn'] ?? null,
                isset($data['pages']) ? (int) $data['pages'] : null,
                $data['language'] ?? null,
                $imageName,
                date('Y-m-d H:i:s')
            );
        }

        return null;
    }

    

    public static function getAll(PDO $pdo): array
    {
        $stmt = $pdo->query("SELECT * FROM books ORDER BY created_at DESC");
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $products = [];
        foreach($rows as $row){
            $products[] = self::mapRow($row);
        }
        return $products;
    }

    public static function findById(PDO $pdo, int $id): ?Book
    {
        $stmt = $pdo->prepare("SELECT * FROM books WHERE id = ?");
        $stmt->execute([$id]);

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row ? self::mapRow($row) : null;
    }



    

    private static function mapRow(array $row): Book
    {
        return new Book(
            (int) $row['id'],
            $row['title'],
            (float) $row['price'],
            $row['description'],
            (int) $row['stock'],
            $row['isbn'],
            $row['pages'] ? (int) $row['pages'] : null,
            $row['language'],
            $row['cover_image'],
            $row['created_at']
        );
    }
}






































































