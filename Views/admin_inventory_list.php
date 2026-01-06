<?= $this->extend('template') ?>

<?= $this->section('content') ?>

  <div class="main-content">
     

      <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
        <a href="javascript:;"><span class="me-1">All</span><span class="text-secondary">(88754)</span></a>
        <a href="javascript:;"><span class="me-1">Ready Stock</span><span class="text-secondary">(56242)</span></a>
        <a href="javascript:;"><span class="me-1">Habis</span><span class="text-secondary">(17)</span></a>
        
      </div>

      <div class="row g-3">
        <div class="col-auto">
          <div class="position-relative">
            <input class="form-control px-5" type="search" placeholder="Cari Inventory">
            <span
              class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
          </div>
        </div>
        <div class="col-auto flex-grow-1 overflow-auto">
          <div class="btn-group position-static">
            <div class="btn-group position-static">
              <button type="button" class="btn btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown"
                aria-expanded="false">
                Brand
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Daikin</a></li>
                <li><a class="dropdown-item" href="javascript:;">Gree</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
            <div class="btn-group position-static">
              <button type="button" class="btn btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown"
                aria-expanded="false">
                Tipe AC
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Splitwall</a></li>
                <li><a class="dropdown-item" href="javascript:;">Portable</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
            <div class="btn-group position-static">
              <button type="button" class="btn btn-filter dropdown-toggle px-4" data-bs-toggle="dropdown"
                aria-expanded="false">
                Kategori
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="javascript:;">Inverter</a></li>
                <li><a class="dropdown-item" href="javascript:;">Non-Inverter</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-auto">
          <div class="d-flex align-items-center gap-2 justify-content-lg-end">
            <button class="btn btn-filter px-4"><i class="bi bi-box-arrow-right me-2"></i>Export</button>
       </div>
        </div>
      </div><!--end row-->

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
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Kategori</th>
                    <th>Rating</th>
                    <th>Brand</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <input class="form-check-input" type="checkbox">
                    </td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box">
                          <img src="/assets/images/orders/01.png" width="70" class="rounded-3" alt="">
                        </div>
                        <div class="product-info">
                          <a href="javascript:;" class="product-title">AC Daikin 123XYZ</a>
                          <p class="mb-0 product-category">Stok : 123</p>
                        </div>
                      </div>
                    </td>
                    <td>$49</td>
                    <td>Palazzos</td>
                   
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
                      <a href="your_destination_url_here">
    <button class="btn btn-primary px-4">
        Manage Stock
    </button>
</a>
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