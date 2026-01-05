<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row mb-4 align-items-center">
        <div class="col-lg-5 col-md-12">
            <?php $userCount = isset($users) ? count($users) : 0; ?>
            <ul class="nav nav-pills user-status-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active btn btn-sm btn-primary" href="javascript:;">
                        All <span class="badge bg-white text-primary ms-1"><?= $userCount ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary ms-2" href="javascript:;">
                        Active <span class="badge bg-secondary ms-1"><?= $userCount ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-sm btn-outline-secondary ms-2" href="javascript:;">
                        Inactive <span class="badge bg-secondary ms-1">0</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-lg-7 col-md-12 d-flex flex-wrap justify-content-lg-end justify-content-start gap-2 mt-3 mt-lg-0">
            <div class="input-group search-box" style="max-width: 250px;">
                <input type="search" class="form-control" placeholder="Search Users">
                <span class="input-group-text"><i class="bi bi-search"></i></span>
            </div>
            
            <button class="btn btn-outline-primary btn-sm me-2">
                <i class="bi bi-download me-1"></i> Export
            </button>
            <a href="/admin/user/add" class="btn btn-success btn-sm">
                <i class="bi bi-plus-lg me-1"></i> Add User
            </a>
        </div>
    </div>
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle table-hover user-table">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 30px;">
                                <input class="form-check-input" type="checkbox" title="Select All">
                            </th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Full Name</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Date Added</th>
                            <th style="width: 80px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($users) && is_array($users)): ?>
                            <?php foreach ($users as $u): ?>
                                <tr>
                                    <td>
                                        <input class="form-check-input" type="checkbox">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="user-avatar" style="width: 40px; height: 40px; overflow: hidden; flex-shrink: 0;">
                                                <img 
                                                    src="assets/images/default-user.png" 
                                                    class="rounded-circle img-fluid object-fit-cover w-100 h-100" 
                                                    alt="<?= esc($u['username'] ?? 'User Avatar') ?>"
                                                >
                                            </div>
                                            <div class="user-info">
                                                <a href="javascript:;" class="user-title fw-bold text-dark text-decoration-none">
                                                    <?= esc($u['username'] ?? '') ?>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-muted">
                                        <?= esc($u['email'] ?? '') ?>
                                    </td>
                                    <td>
                                        <?= esc($u['first_name'] ?? '') ?> <?= esc($u['last_name'] ?? '') ?>
                                    </td>
                                    <td>
                                        <?= esc($u['role_name']) ?>
                                    </td>
                                    <td>
                                        <span class="badge <?= ($u['is_active'] ?? 0) ? 'bg-success' : 'bg-danger' ?>">
                                            <?= ($u['is_active'] ?? 0) ? 'Active' : 'Inactive' ?>
                                        </span>
                                    </td>
                                    <td class="text-muted small">
                                        <?= date('M d, Y', strtotime($u['created_at'] ?? '2023-11-12 22:45:00')) ?>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <a href="/admin/user/edit/<?= esc($u['user_id'] ?? '') ?>" class="btn btn-sm btn-outline-primary" title="Edit User">
                                                <i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="/admin/user/delete/<?= esc($u['user_id'] ?? '') ?>" class="btn btn-sm btn-outline-danger" title="Delete User" onclick="return confirm('Are you sure you want to delete this user?')">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="8" class="text-center py-4 text-muted">
                                    <i class="bi bi-info-circle me-1"></i> No users found matching your criteria.
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
        console.log("User Listing Page Loaded and Styled");
    </script>
<?= $this->endSection() ?>