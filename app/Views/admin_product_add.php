<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3"><?= isset($product) ? 'Edit' : 'Add' ?> Product</h5>
            <form action="/admin/produk/save" method="post">
                <?= isset($product) ? '<input type="hidden" name="id" value="' . esc($product['id']) . '">' : '' ?>
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" value="<?= esc($product['name'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        <option value="">Select Category</option>
                        <?php foreach ($categories as $cat): ?>
                            <option value="<?= $cat['id'] ?>" <?= ($product['category_id'] ?? '') == $cat['id'] ? 'selected' : '' ?>><?= esc($cat['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Brand</label>
                    <select name="brand_id" class="form-control">
                        <option value="">Select Brand</option>
                        <?php foreach ($brands as $brand): ?>
                            <option value="<?= $brand['id'] ?>" <?= ($product['brand_id'] ?? '') == $brand['id'] ? 'selected' : '' ?>><?= esc($brand['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>AC Type</label>
                    <select name="ac_type_id" class="form-control">
                        <option value="">Select AC Type</option>
                        <?php foreach ($ac_types as $ac): ?>
                            <option value="<?= $ac['id'] ?>" <?= ($product['ac_type_id'] ?? '') == $ac['id'] ? 'selected' : '' ?>><?= esc($ac['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>PK</label>
                    <select name="pk_id" class="form-control">
                        <option value="">Select PK</option>
                        <?php foreach ($pk_list as $pk): ?>
                            <option value="<?= $pk['id'] ?>" <?= ($product['pk_id'] ?? '') == $pk['id'] ? 'selected' : '' ?>><?= esc($pk['name']) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Series AC</label>
                    <input type="text" name="series_ac" class="form-control" value="<?= esc($product['series_ac'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Base Price</label>
                    <input type="number" name="base_price" class="form-control" value="<?= esc($product['base_price'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label>Sale Price</label>
                    <input type="number" name="sale_price" class="form-control" value="<?= esc($product['sale_price'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Main Image URL</label>
                    <input type="text" name="main_image_url" class="form-control" value="<?= esc($product['main_image_url'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Features</label>
                    <textarea name="features" class="form-control"><?= esc($product['features'] ?? '') ?></textarea>
                </div>
                <div class="mb-3">
                    <label>Warranty Info</label>
                    <input type="text" name="warranty_info" class="form-control" value="<?= esc($product['warranty_info'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Is Active</label>
                    <input type="checkbox" name="is_active" value="1" <?= ($product['is_active'] ?? 0) ? 'checked' : '' ?>>
                </div>
                <div class="mb-3">
                    <label>Is Featured</label>
                    <input type="checkbox" name="is_featured" value="1" <?= ($product['is_featured'] ?? 0) ? 'checked' : '' ?>>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/admin/produk" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="fullfilledByPhoenix" checked="checked">
                                    <label class="form-check-label fw-bold d-flex align-items-center" for="fullfilledByPhoenix">Fullfilled by Admin <span class="badge bg-warning text-dark ms-2">Recommended</span></label></div>
                                  <div class="ps-4">
                                    <p class="mb-0">Your product, Our responsibility.<br>For a measly fee, we will handle the delivery process for you.</p>
                                  </div>
                                </div>
                              </div>
                              <p class="fs--1 fw-semi-bold mb-0">See our <a class="fw-bold" href="#!">Delivery terms and conditions </a>for details.</p>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="GlobalDelivery">
                            <div class="d-flex flex-column h-100">
                              <h6 class="mb-3">Global Delivery</h6>
                              <div class="flex-1">
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="Worldwidedelivery">
                                    <label class="form-check-label fw-bold" for="Worldwidedelivery">Worldwide delivery</label>
                                  </div>
                                  <div class="ps-4">
                                    <p class="mb-0">Only available with Shipping method: <a href="#!">Fullfilled by Admin</a></p>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="SelectedCountries" checked="checked">
                                    <label class="form-check-label fw-bold d-flex align-items-center" for="SelectedCountries">Selected Countries</label>
                                  </div>
                                  <div class="ps-4">
                                    <input class="form-control" type="text" placeholder="Type Country name">
                                  </div>
                                </div>
                                <div class="mb-0">
                                  <div class="form-check mb-1">
                                    <input class="form-check-input" type="radio" name="shippingRadio" id="Localdelivery">
                                    <label class="form-check-label fw-bold" for="Localdelivery">Local delivery</label>
                                  </div>
                                  <div class="ps-4">
                                    <p class="mb-0">Only available with Shipping method: <a href="#!">Fullfilled by Admin</a></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Attributes">
                            <h6 class="mb-3">Attributes</h6>
                            <div class="form-check">
                              <input class="form-check-input" id="fragileCheck" type="checkbox">
                              <label class="form-check-label text-900 fs-0" for="fragileCheck">Fragile Product</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="biodegradableCheck" type="checkbox">
                              <label class="form-check-label text-900 fs-0" for="biodegradableCheck">Biodegradable</label>
                            </div>
                            <div class="mb-3">
                              <div class="form-check"><input class="form-check-input" id="frozenCheck" type="checkbox" checked="checked">
                                <label class="form-check-label text-900 fs-0" for="frozenCheck">Frozen Product</label>
                                <input class="form-control" type="text" placeholder="Max. allowed Temperature" style="max-width: 350px;">
                              </div>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" id="productCheck" type="checkbox" checked="checked">
                              <label class="form-check-label text-900 fs-0" for="productCheck">Expiry Date of Product</label>
                              <input class="form-control" id="inventory" type="date">
                            </div>
                          </div>
                          <div class="tab-pane fade" id="Advanced">
                            <h6 class="mb-3">Advanced</h6>
                            <div class="row g-3">
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Product ID Type</label>
                                <select class="form-select">
                                  <option selected="selected">ISBN</option>
                                  <option value="1">UPC</option>
                                  <option value="2">EAN</option>
                                  <option value="3">JAN</option>
                                </select>
                              </div>
                              <div class="col-12 col-lg-6">
                                <label class="mb-2">Product ID</label>
                                <input class="form-control" type="text" placeholder="ISBN Number">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                     </div>
                   </div> 
                 </div>
              </div>
          </div> 
          <div class="col-12 col-lg-4">
             <div class="card">
                <div class="card-body">
                   <div class="d-flex align-items-center gap-3">
                    <button type="button" class="btn btn-outline-danger flex-fill"><i class="bi bi-x-circle me-2"></i>Discard</button>
                    <button type="button" class="btn btn-outline-success flex-fill"><i class="bi bi-cloud-download me-2"></i>Save Draft</button>
                    <button type="button" class="btn btn-outline-primary flex-fill"><i class="bi bi-send me-2"></i>Publish</button>
                   </div>
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                   <h5 class="mb-3">Organize</h5>
                      <div class="row g-3">
                          <div class="col-12">
                            <label for="AddCategory" class="form-label">Category</label>
                            <select class="form-select" id="AddCategory">
                              <option value="0">Topwear</option>
                              <option value="1">Bottomwear</option>
                              <option value="2">Casual Tshirt</option>
                              <option value="3">Electronic</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <label for="Collection" class="form-label">Collection</label>
                            <input type="text" class="form-control" id="Collection" placeholder="Collection">
                          </div>
                          <div class="col-12">
                            <label for="Tags" class="form-label">Tags</label>
                            <input type="text" class="form-control" id="Tags" placeholder="Tags">
                          </div>
                          <div class="col-12">
                            <div class="d-flex align-items-center gap-2">
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">Woman <i class="bi bi-x"></i></a>
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">Fashion <i class="bi bi-x"></i></a>
                              <a href="javascript:;" class="btn btn-sm btn-light border shadow-sm">Furniture <i class="bi bi-x"></i></a>
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="Vendor" class="form-label">Vendor</label>
                            <input type="text" class="form-control" id="Vendor" placeholder="Vendor">
                          </div>
                        </div><!--end row-->
                     </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    <h5 class="mb-3">Variants</h5>
                    <div class="row g-3">
                      <div class="col-12">
                        <label for="Brand" class="form-label">Brand</label>
                        <input type="text" class="form-control" id="Brand" placeholder="Brand">
                       </div>
                      <div class="col-12">
                        <label for="SKU" class="form-label">SKU</label>
                        <input type="text" class="form-control" id="SKU" placeholder="SKU">
                       </div>
                       <div class="col-12">
                        <label for="Color" class="form-label">Color</label>
                        <input type="text" class="form-control" id="Color" placeholder="Color">
                       </div>
                       <div class="col-12">
                        <label for="Size" class="form-label">Size</label>
                        <input type="text" class="form-control" id="Size" placeholder="Size">
                       </div>
                        <div class="col-12">
                          <div class="d-grid">
                            <button type="button" class="btn btn-primary">Add Variants</button>
                          </div>
                        </div>
                      </div>
                  </div>
                 </div>

              </div>                
          
         </div><!--end row-->
    </div>

  
  