<?php
include __DIR__ . "/../layouts/header.php";
include __DIR__ . "/../../config.php";
include __DIR__ . "/../../vendor/autoload.php";



use App\Database;
use App\Book;

?>

<main class="main-content">
  <div class="section-container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-8 col-md-10">
        <div class="card shadow-sm border-0 rounded-3">
          <div class="card-header bg-primary text-white rounded-top-3 p-4">
            <h2 class="card-title mb-0">
              <i class="fa-solid fa-plus"></i>
              إضافة كتاب جديد
            </h2>
          </div>
          
          <div class="card-body p-4">
            <form method="POST" action="index.php?page=store-product" enctype="multipart/form-data" class="needs-validation" novalidate>
              
              <!-- Product Name -->
              <div class="mb-3">
                <label for="productName" class="form-label">اسم الكتاب</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="productName" 
                  name="title" 
                  placeholder="أدخل اسم المنتج" 
                  required>
                <div class="invalid-feedback">
                  يرجى إدخال اسم المنتج
                </div>
              </div>

              <!-- Product Description -->
              <div class="mb-3">
                <label for="productDescription" class="form-label">وصف الكتاب</label>
                <textarea 
                  class="form-control" 
                  id="productDescription" 
                  name="description" 
                  rows="4" 
                  placeholder="أدخل وصف المنتج" 
                  required></textarea>
                <div class="invalid-feedback">
                  يرجى إدخال وصف المنتج
                </div>
              </div>

              <!-- Product Price -->
              <div class="mb-3">
                <label for="productPrice" class="form-label">السعر</label>
                <input 
                  type="number" 
                  class="form-control" 
                  id="productPrice" 
                  name="price" 
                  placeholder="أدخل السعر" 
                  step="0.01" 
                  min="0" 
                  required>
                <div class="invalid-feedback">
                  يرجى إدخال سعر صحيح
                </div>
              </div>

              <!-- Product Stock -->
              <div class="mb-3">
                <label for="productStock" class="form-label">الكمية المتاحة</label>
                <input 
                  type="number" 
                  class="form-control" 
                  id="productStock" 
                  name="stock" 
                  placeholder="أدخل الكمية المتاحة" 
                  min="0" 
                  required>
                <div class="invalid-feedback">
                  يرجى إدخال كمية صحيحة
                </div>
              </div>

              <div class="mb-3">
                <label for="productIsbn" class="form-label">ISBN</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="productIsbn" 
                  name="isbn" 
                  placeholder="أدخل ISBN (اختياري)"
                  >
              </div>

              <div class="mb-3">
                <label for="productPages" class="form-label">عدد الصفحات</label>
                <input 
                  type="number" 
                  class="form-control" 
                  id="productPages" 
                  name="pages" 
                  placeholder="أدخل عدد الصفحات (اختياري)"
                  >
              </div>

              <div class="mb-3">
                <label for="productLanguage" class="form-label">لغة الكتاب</label>
                <input 
                  type="text" 
                  class="form-control" 
                  id="productLanguage" 
                  name="language" 
                  placeholder="أدخل لغة الكتاب (اختياري)"
                  >
                  يرجى إدخال كمية صحيحة
                </div>
              </div>


              <!-- Product Image -->
              <div class="mb-3">
                <label for="productImage" class="form-label">صورة الكتاب</label>
                <input 
                  type="file" 
                  class="form-control" 
                  id="productImage" 
                  name="cover_image" 
                  accept="image/*" 
                  required>
                <small class="text-muted d-block mt-2">الصيغ المقبولة: JPG, PNG, GIF (الحد الأقصى: 2MB)</small>
                <div class="invalid-feedback">
                  يرجى اختيار صورة المنتج
                </div>
              </div>

              <!-- Action Buttons -->
              <div class="d-flex gap-2 pt-3">
                
                <button type="submit" class="btn btn-primary btn-lg flex-grow-1">
                  <i class="fa-solid fa-save"></i>
                  
                  حفظ الكتاب
                </button>
                <a href="../../book/index.php" class="btn btn-secondary btn-lg flex-grow-1">
                  <i class="fa-solid fa-xmark"></i>
                  إلغاء
                </a>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>



<?php include __DIR__ . "/../layouts/footer.php"; ?>
