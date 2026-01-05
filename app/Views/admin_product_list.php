<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row mb-4 align-items-center">
        <div class="col-lg-5 col-md-12">
            <?php $productCount = isset($products) ? count($products) : 0; ?>
            <ul class="nav nav-pills product-status-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn btn-sm btn-primary" href="javascript:;">
                        All <span class="badge bg-white text-primary ms-1"><?= $productCount ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary ms-2" href="javascript:;">
                        Published <span class="badge bg-secondary ms-1"><?= $productCount ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary ms-2" href="javascript:;">
                        Drafts <span class="badge bg-secondary ms-1">0</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary ms-2" href="javascript:;">
                        On Discount <span class="badge bg-secondary ms-1">0</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-lg-7 col-md-12 d-flex flex-wrap justify-content-lg-end justify-content-start gap-2 mt-3 mt-lg-0">
            <div class="input-group search-box" style="max-width: 250px;">
                <input type="search" class="form-control" placeholder="Search Products">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
            
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                </button>
                <ul class="dropdown-menu"><li><a class="dropdown-item" href="#">...</a></li></ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    Brand
                </button>
                <ul class="dropdown-menu"><li><a class="dropdown-item" href="#">...</a></li></ul>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    AC Type
                </button>
                <ul class="dropdown-menu"><li><a class="dropdown-item" href="#">...</a></li></ul>
            </div>

            <button class="btn btn-outline-primary btn-sm me-2">
                <i class="bi bi-download me-1"></i> Export
            </button>
            <a href="produk/add" class="btn btn-success btn-sm">
                <i class="bi bi-plus-lg me-1"></i> Add Product
            </a>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover product-table">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 30px;">
                                <input class="form-check-input" type="checkbox" title="Select All">
                            </th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Rating</th>
                            <th>Brand</th>
                            <th>Date Added</th>
                            <th style="width: 80px;">Action</th>
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
                                            <div class="product-box" style="width: 60px; height: 60px; overflow: hidden; flex-shrink: 0;">
                                                <img 
                                                    src="<?= esc($p['main_image_url'] ?? 'assets/images/default-product.png') ?>" 
                                                    class="rounded-3 img-fluid object-fit-cover w-100 h-100" 
                                                    alt="<?= esc($p['name'] ?? 'Product Image') ?>"
                                                >
                                            </div>
                                            <div class="product-info">
                                                <a href="javascript:;" class="product-title fw-bold text-dark text-decoration-none">
                                                    <?= esc($p['name'] ?? '') ?>
                                                </a>
                                                <p class="mb-0 product-category text-muted small">
                                                    SKU: P000<?= esc($p['id'] ?? '0') ?> 
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="fw-bold text-success">
                                        Rp. <?= number_format($p['sale_price'] ?? $p['base_price'] ?? 0, 0, ',', '.') ?>
                                    </td>
                                    <td>
                                        <span class="badge bg-info-subtle text-info">
                                            <?= esc($p['category_name'] ?? 'Palazzos') ?>
                                        </span>
                                    </td>
                                    <td>
                                        <div class="product-rating d-flex align-items-center">
                                            <i class="bi bi-star-fill text-warning me-1"></i>
                                            <span class="fw-medium"><?= esc($p['avg_rating'] ?? '5.0') ?></span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="text-secondary text-decoration-none small">
                                            <?= esc($p['brand_name'] ?? 'Generic Brand') ?>
                                        </a>
                                    </td>
                                    <td class="text-muted small">
                                        <?= date('M d, Y', strtotime($p['created_at'] ?? '2023-11-12 22:45:00')) ?>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="produk/edit/<?= esc($p['id'] ?? '') ?>" class="btn btn-sm btn-outline-primary" title="Edit Product">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="javascript:;" class="btn btn-sm btn-outline-danger" title="Delete Product">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">
                                    <i class="bi bi-info-circle me-1"></i> No products found matching your criteria.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <?= isset($pager) ? $pager->links() : '' ?>
    </div>
    </div>
  
<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
    <script>
        console.log("Product Listing Page Loaded and Styled");
    </script>
<?= $this->endSection() ?>