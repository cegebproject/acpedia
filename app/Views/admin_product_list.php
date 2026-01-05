<?= $this->extend('template') ?>

<?= $this->section('content') ?>


    <div>

      <?php $productCount = isset($products) ? count($products) : 0; ?>
      <div>
        <a href="javascript:;"><span>All</span><span>(<?= $productCount ?>)</span></a>
        <a href="javascript:;"><span>Published</span><span>(<?= $productCount ?>)</span></a>
        <a href="javascript:;"><span>Drafts</span><span>(0)</span></a>
        <a href="javascript:;"><span>On Discount</span><span>(0)</span></a>
      </div>

      <div>
        <div>
          <input type="search" placeholder="Search Products">
          <span>search</span>
        </div>
        <div>
          <button type="button">
            Category
          </button>
          <button type="button">
            Brand
          </button>
          <button type="button">
            AC Type
          </button>
        </div>
        <div>
          <button>Export</button>
          <a href="produk/add">
            <button>Add Product</button>
          </a>
        </div>
      </div>

      <div>


  <div class="card mt-4">
        <div class="card-body">
          <div class="product-table">
            <div class="table-responsive white-space-nowrap">
              <table class="table align-middle">
                <thead class="table-light">
                  <tr>
                    <th>
                      <input class="form-check-input" type="checkbox">
                    </th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Rating</th>
                    <th>Brand</th>                    
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                   <?php if (!empty($products) && is_array($products)): ?>
              <?php foreach ($products as $p): ?>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="<?= esc($p['main_image_url'] ?? 'assets/images/default-product.png') ?>" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title"><?= esc($p['name'] ?? '') ?></a>
                          <p class="mb-0 product-category"><?= esc($p['category_name'] ?? 'Fashion') ?></p>
                        </div>
                      </div>
                    </td>
                    <td>$<?= number_format($p['sale_price'] ?? $p['base_price'] ?? 0) ?></td>
                    <td><?= esc($p['category_name'] ?? 'Palazzos') ?></td>

                    <td>
                      <div class="product-rating">
                        <i class="bi bi-star-fill text-warning me-2"></i><span><?= esc($p['avg_rating'] ?? '5.0') ?></span>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;"><?= esc($p['brand_name'] ?? 'Michle Shoes England') ?></a>
                    </td>
                    <td>
                      Nov 12, 10:45 PM
                    </td>
                    <td>
                     
                    </td>
                  </tr>
                    <?php endforeach; ?>
                  <?php else: ?>
                  <tr>
                    <td colspan="7">No products found.</td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


        <div>
          <?= isset($pager) ? $pager->links() : '' ?>
        </div>
      </div>

    </div>
                  
 
    
  
  
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        console.log("Dashboard Loaded");
    </script>
<?= $this->endSection() ?>