<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Master Data Management</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <i class="fas fa-tags fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Brands</h5>
                    <p class="card-text">Manage product brands</p>
                    <a href="/admin/master/brands" class="btn btn-primary">Manage Brands</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <i class="fas fa-folder fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Categories</h5>
                    <p class="card-text">Manage product categories</p>
                    <a href="/admin/master/categories" class="btn btn-success">Manage Categories</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <i class="fas fa-star fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">PK Ratings</h5>
                    <p class="card-text">Manage PK ratings</p>
                    <a href="/admin/master/pklist" class="btn btn-warning">Manage PK Ratings</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow h-100">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fa-3x text-info mb-3"></i>
                    <h5 class="card-title">AC Types</h5>
                    <p class="card-text">Manage AC types</p>
                    <a href="/admin/master/actypes" class="btn btn-info">Manage AC Types</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>