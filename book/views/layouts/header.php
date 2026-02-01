<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Website</title>
  <link rel="icon" href="./assets/images/logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/vendors/all.min.css">
  <link rel="stylesheet" href="assets/css/vendors/bootstrap.rtl.min.css">
  <link rel="stylesheet" href="assets/css/vendors/owl.carousel.min.css">
  <link rel="stylesheet" href="assets/css/vendors/owl.theme.default.min.css">
  <link rel="stylesheet" href="assets/css/main.min.css">
</head>

<body>
  <div>
    <!-- Header Content Start -->
    <div class="header-container fixed-top border-bottom">
      <header>
        <div class="section-container d-flex justify-content-between">
          <div class="header__email d-flex gap-2 align-items-center">
            <i class="fa-regular fa-envelope"></i>
            coding.arabic@gmail.com
          </div>
          <div class="header__info d-none d-lg-block">
            شحن مجاني للطلبات 💥 عند الشراء ب 699ج او اكثر
          </div>
          <div class="header__branches d-flex gap-2 align-items-center">
            <a class="text-white text-decoration-none" href="branches.html">
              <i class="fa-solid fa-location-dot"></i>
              فروعنا
            </a>
          </div>
        </div>
      </header>
      <nav class="nav">
        <div class="section-container w-100 d-flex align-items-center gap-4 h-100">
          <div class="nav__categories-btn align-items-center justify-content-center rounded-1 d-none d-lg-flex">
            <button class="border-0 bg-transparent" data-bs-toggle="offcanvas" data-bs-target="#nav__categories">
              <i class="fa-solid fa-align-center fa-rotate-180"></i>
            </button>
          </div>
          <div class="nav__logo">
            <a href="index.php?page=home">
              <img class="h-100" src="assets/images/logo.png" alt="">
            </a>
          </div>
          <div class="nav__search w-100">
            <input class="nav__search-input w-100" type="search" placeholder="أبحث هنا عن اي شئ تريده...">
            <span class="nav__search-icon">
              <i class="fa-solid fa-magnifying-glass"></i>
            </span>
          </div>
          <ul class="nav__links gap-3 list-unstyled d-none d-lg-flex m-0">
            <li class="nav__link">
              <a class="d-flex align-items-center gap-2" href="account.html">
                تسجيل الدخول
                <i class="fa-regular fa-user"></i>
              </a>
            </li>
            <li class="nav__link">
              <a class="d-flex align-items-center gap-2" href="index.php?page=create-product">
                إضافة كتاب
                <i class="fa-solid fa-plus"></i>
              </a>
            </li>
            <li class="nav__link">
              <a class="d-flex align-items-center gap-2" href="favourites.html">
                المفضلة
                <div class="position-relative">
                  <i class="fa-regular fa-heart"></i>
                  <div class="nav__link-floating-icon">0</div>
                </div>
              </a>

            </li>
            <li class="nav__link">
              <a class="d-flex align-items-center gap-2" data-bs-toggle="offcanvas" data-bs-target="#nav__cart">
                عربة التسوق
                <div class="position-relative">
                  <i class="fa-solid fa-cart-shopping"></i>
                  <div class="nav__link-floating-icon">0</div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- Header Content End -->