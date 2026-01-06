<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row mb-4 align-items-center">
        <div class="col-lg-6 col-md-12">
            <h1 class="h3 mb-0 text-gray-800"><?= $entityName ?> Management</h1>
        </div>
        <div class="col-lg-6 col-md-12 text-end">
            <a href="/admin/master/<?= $entity ?>/add" class="btn btn-success">
                <i class="fas fa-plus me-1"></i> Add <?= $entityName ?>
            </a>
            <a href="/admin/master" class="btn btn-secondary ms-2">
                <i class="fas fa-arrow-left me-1"></i> Back to Master Data
            </a>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <?php if ($entity == 'brands'): ?>
                                <th>Website</th>
                                <th>Logo</th>
                            <?php elseif ($entity == 'categories'): ?>
                                <th>Parent</th>
                            <?php elseif ($entity == 'pklist'): ?>
                                <th>BTU Range</th>
                            <?php elseif ($entity == 'actypes'): ?>
                                <th>Icon</th>
                            <?php endif; ?>
                            <th>Sort Order</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($items)): ?>
                            <?php foreach ($items as $item): ?>
                                <tr>
                                    <td><?= esc($item['id']) ?></td>
                                    <td>
                                        <strong><?= esc($item['name']) ?></strong>
                                        <?php if (!empty($item['slug'])): ?>
                                            <br><small class="text-muted">Slug: <?= esc($item['slug']) ?></small>
                                        <?php endif; ?>
                                    </td>
                                    <?php if ($entity == 'brands'): ?>
                                        <td>
                                            <?php if (!empty($item['website_url'])): ?>
                                                <a href="<?= esc($item['website_url']) ?>" target="_blank" class="text-primary">
                                                    <i class="fas fa-external-link-alt"></i> Visit
                                                </a>
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php if (!empty($item['logo_url'])): ?>
                                                <img src="<?= esc($item['logo_url']) ?>" alt="Logo" style="max-width: 50px; max-height: 50px;">
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                    <?php elseif ($entity == 'categories'): ?>
                                        <td>
                                            <?php
                                            // For simplicity, just show parent_id. In real app, you'd join to get parent name
                                            echo $item['parent_id'] ? 'Parent ID: ' . esc($item['parent_id']) : 'Top Level';
                                            ?>
                                        </td>
                                    <?php elseif ($entity == 'pklist'): ?>
                                        <td>
                                            <?php
                                            $range = [];
                                            if ($item['btu_min']) $range[] = $item['btu_min'];
                                            if ($item['btu_max']) $range[] = $item['btu_max'];
                                            echo !empty($range) ? implode(' - ', $range) . ' BTU' : '-';
                                            ?>
                                        </td>
                                    <?php elseif ($entity == 'actypes'): ?>
                                        <td>
                                            <?php if (!empty($item['icon_url'])): ?>
                                                <img src="<?= esc($item['icon_url']) ?>" alt="Icon" style="max-width: 30px; max-height: 30px;">
                                            <?php else: ?>
                                                -
                                            <?php endif; ?>
                                        </td>
                                    <?php endif; ?>
                                    <td><?= esc($item['sort_order'] ?? 0) ?></td>
                                    <td>
                                        <span class="badge <?= ($item['is_active'] ?? 1) ? 'bg-success' : 'bg-danger' ?>">
                                            <?= ($item['is_active'] ?? 1) ? 'Active' : 'Inactive' ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="/admin/master/<?= $entity ?>/edit/<?= esc($item['id']) ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-edit"></i> Edit
                                        </a>
                                        <a href="/admin/master/<?= $entity ?>/delete/<?= esc($item['id']) ?>" class="btn btn-sm btn-danger ms-1" onclick="return confirm('Are you sure you want to delete this <?= strtolower($entityName) ?>?')">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7" class="text-center py-4">
                                    <i class="fas fa-info-circle me-2"></i> No <?= strtolower($entityName) ?>s found.
                                </td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>