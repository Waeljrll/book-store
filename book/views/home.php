<?php
use App\Book;

$products = Book::getAll($pdo); ?>
<main class="pt-4">
  <!-- Hero Section Start -->
  <section class="section-container hero">
    <div class="owl-carousel hero__carousel owl-theme">
      <div class="hero__item">
        <img class="hero__img" src="assets/images/carousel-2.png" alt="">
      </div>
      <div class="hero__item">
        <img class="hero__img" src="assets/images/carousel-2.png" alt="">
      </div>
      <div class="hero__item">
        <img class="hero__img" src="assets/images/carousel-2.png" alt="">
      </div>
    </div>
  </section>
  
  <!-- Books Section Start -->
  <section class="section-container mb-5 mt-5">
    <h2 class="section-title mb-4">الكتب المتاحة</h2>
    <div class="row g-4">
      <?php if (empty($products)): ?>
        <div class="col-12">
          <div class="alert alert-info text-center">
            <p class="mb-0">لا توجد كتب متاحة حالياً</p>
          </div>
        </div>
      <?php else: ?>
        <?php foreach ($products as $product): ?>
          <div class="col-md-3 col-sm-6">
            <div class="card h-100 shadow-sm">
              <?php if ($product->getCoverImage()): ?>
                <img src="<?= htmlspecialchars($product->getCoverImage()) ?>" 
                     class="card-img-top" 
                     alt="<?= htmlspecialchars($product->getTitle()) ?>"
                     style="height: 300px; object-fit: cover;">
              <?php else: ?>
                <img src="assets/images/product-1.webp" 
                     class="card-img-top" 
                     alt="<?= htmlspecialchars($product->getTitle()) ?>"
                     style="height: 300px; object-fit: cover;">
              <?php endif; ?>
              <div class="card-body d-flex flex-column">
                <h5 class="card-title"><?= htmlspecialchars($product->getTitle()) ?></h5>
                <p class="card-text flex-grow-1">
                  <?= htmlspecialchars(mb_substr($product->getDescription() ?? '', 0, 100)) ?>
                  <?= mb_strlen($product->getDescription() ?? '') > 100 ? '...' : '' ?>
                </p>
                <div class="mt-auto">
                  <p class="card-text fw-bold text-primary fs-5">
                    <?= number_format($product->getPrice(), 2) ?> جنيه
                  </p>
                  <a href="#" class="btn btn-primary w-100">عرض التفاصيل</a>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </section>
  
</main>