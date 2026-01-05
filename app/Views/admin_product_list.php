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
        <table>
          <thead>
            <tr>
              <th>
                <input type="checkbox">
              </th>
              <th>Product Name</th>
              <th>Price</th>
              <th>Category</th>
              <th>Tags</th>
              <th>Rating</th>
              <th>Vendor</th>
              <th>Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($products) && is_array($products)): ?>
              <?php foreach ($products as $p): ?>
                <tr>
                  <td>
                    <input type="checkbox">
                  </td>
                  <td>
                    <div>
                      <div>
                        <img src="<?= esc($p['main_image_url'] ?? 'assets/images/default-product.png') ?>">
                      </div>
                      <div>
                        <a href="javascript:;"><?= esc($p['name'] ?? '') ?></a>
                        <p>Category : <?= esc($p['category_name'] ?? 'Fashion') ?></p>
                      </div>
                    </div>
                  </td>
                  <td>$<?= number_format($p['sale_price'] ?? $p['base_price'] ?? 0) ?></td>
                  <td><?= esc($p['category_name'] ?? 'Palazzos') ?></td>
                  <td>
                    <div>
                      <a href="javascript:;">Jeans</a>
                      <a href="javascript:;">iPhone</a>
                      <a href="javascript:;">Laptops</a>
                      <a href="javascript:;">Mobiles</a>
                      <a href="javascript:;">Wallets</a>
                    </div>
                  </td>
                  <td>
                    <div>
                      <i></i><span><?= esc($p['avg_rating'] ?? '5.0') ?></span>
                    </div>
                  </td>
                  <td>
                    <a href="javascript:;"><?= esc($p['brand_name'] ?? 'Michle Shoes England') ?></a>
                  </td>
                  <td>
                    <?= isset($p['created_at']) ? date('M d, h:i A', strtotime($p['created_at'])) : 'Nov 12, 10:45 PM' ?>
                  </td>
                  <td>
                    <div>
                      <button type="button">
                        ...
                      </button>
                      <ul>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="9">No products found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>

        <div>
          <?= isset($pager) ? $pager->links() : '' ?>
        </div>
      </div>

    </div>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="/assets/images/orders/08.png" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
                          <p class="mb-0 product-category">Category : Fashion</p>
                        </div>
                      </div>
                    </td>
                    <td>$49</td>
                    <td>Palazzos</td>
                    <td>
                      <div class="product-tags">
                        <a href="javascript:;" class="btn-tags">Jeans</a>
                        <a href="javascript:;" class="btn-tags">iPhone</a>
                        <a href="javascript:;" class="btn-tags">Laptops</a>
                        <a href="javascript:;" class="btn-tags">Mobiles</a>
                        <a href="javascript:;" class="btn-tags">Wallets</a>
                      </div>
                    </td>
                    <td>
                      <div class="product-rating">
                        <i class="bi bi-star-fill text-warning me-2"></i><span>5.0</span>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;">Michle Shoes England</a>
                    </td>
                    <td>
                      Nov 12, 10:45 PM
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret"
                          type="button" data-bs-toggle="dropdown">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="/assets/images/orders/09.png" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title">Women Pink Floral Printed</a>
                          <p class="mb-0 product-category">Category : Fashion</p>
                        </div>
                      </div>
                    </td>
                    <td>$49</td>
                    <td>Palazzos</td>
                    <td>
                      <div class="product-tags">
                        <a href="javascript:;" class="btn-tags">Jeans</a>
                        <a href="javascript:;" class="btn-tags">iPhone</a>
                        <a href="javascript:;" class="btn-tags">Laptops</a>
                        <a href="javascript:;" class="btn-tags">Mobiles</a>
                        <a href="javascript:;" class="btn-tags">Wallets</a>
                      </div>
                    </td>
                    <td>
                      <div class="product-rating">
                        <i class="bi bi-star-fill text-warning me-2"></i><span>5.0</span>
                      </div>
                    </td>
                    <td>
                      <a href="javascript:;">Michle Shoes England</a>
                    </td>
                    <td>
                      Nov 12, 10:45 PM
                    </td>
                    <td>
                      <div class="dropdown">
                        <button class="btn btn-sm btn-filter dropdown-toggle dropdown-toggle-nocaret"
                          type="button" data-bs-toggle="dropdown">
                          <i class="bi bi-three-dots"></i>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>


    </div>
 
    
  
  
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        console.log("Dashboard Loaded");
    </script>
<?= $this->endSection() ?>