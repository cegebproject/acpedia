<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="card-title mb-0">
                        <?= isset($item) ? 'Edit' : 'Add' ?> <?= $entityName ?>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="/admin/master/<?= $entity ?>/save" method="post">
                        <?= isset($item) ? '<input type="hidden" name="id" value="' . esc($item['id']) . '">' : '' ?>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Name *</label>
                                <input type="text" class="form-control" id="name" name="name" value="<?= esc($item['name'] ?? '') ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" id="slug" name="slug" value="<?= esc($item['slug'] ?? '') ?>" placeholder="Auto-generated if empty">
                                <small class="form-text text-muted">Leave empty to auto-generate from name</small>
                            </div>
                        </div>

                        <?php if ($entity == 'brands'): ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="logo_url" class="form-label">Logo URL</label>
                                    <input type="url" class="form-control" id="logo_url" name="logo_url" value="<?= esc($item['logo_url'] ?? '') ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="website_url" class="form-label">Website URL</label>
                                    <input type="url" class="form-control" id="website_url" name="website_url" value="<?= esc($item['website_url'] ?? '') ?>">
                                </div>
                            </div>
                        <?php elseif ($entity == 'categories'): ?>
                            <div class="mb-3">
                                <label for="parent_id" class="form-label">Parent Category</label>
                                <select class="form-control" id="parent_id" name="parent_id">
                                    <option value="">Top Level Category</option>
                                    <!-- In real app, populate with existing categories -->
                                </select>
                            </div>
                        <?php elseif ($entity == 'pklist'): ?>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="btu_min" class="form-label">BTU Min</label>
                                    <input type="number" class="form-control" id="btu_min" name="btu_min" value="<?= esc($item['btu_min'] ?? '') ?>">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="btu_max" class="form-label">BTU Max</label>
                                    <input type="number" class="form-control" id="btu_max" name="btu_max" value="<?= esc($item['btu_max'] ?? '') ?>">
                                </div>
                            </div>
                        <?php elseif ($entity == 'actypes'): ?>
                            <div class="mb-3">
                                <label for="icon_url" class="form-label">Icon URL</label>
                                <input type="url" class="form-control" id="icon_url" name="icon_url" value="<?= esc($item['icon_url'] ?? '') ?>">
                            </div>
                        <?php endif; ?>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"><?= esc($item['description'] ?? '') ?></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="sort_order" class="form-label">Sort Order</label>
                                <input type="number" class="form-control" id="sort_order" name="sort_order" value="<?= esc($item['sort_order'] ?? 0) ?>">
                            </div>
                            <?php if (in_array($entity, ['brands', 'categories', 'actypes'])): ?>
                                <div class="col-md-6 mb-3">
                                    <label for="is_active" class="form-label">Status</label>
                                    <select class="form-control" id="is_active" name="is_active">
                                        <option value="1" <?= ($item['is_active'] ?? 1) ? 'selected' : '' ?>>Active</option>
                                        <option value="0" <?= !($item['is_active'] ?? 1) ? 'selected' : '' ?>>Inactive</option>
                                    </select>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="/admin/master/<?= $entity ?>" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-1"></i> Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i> Save <?= $entityName ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    // Auto-generate slug from name
    document.getElementById('name').addEventListener('input', function() {
        const name = this.value;
        const slug = name.toLowerCase()
            .replace(/[^a-z0-9\s-]/g, '')
            .replace(/\s+/g, '-')
            .replace(/-+/g, '-')
            .trim('-');
        document.getElementById('slug').value = slug;
    });
</script>
<?= $this->endSection() ?>