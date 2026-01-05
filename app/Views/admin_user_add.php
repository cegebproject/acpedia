<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="main-content">
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3"><?= isset($user) ? 'Edit' : 'Add' ?> User</h5>
            <form action="/admin/user/save" method="post">
                <?= isset($user) ? '<input type="hidden" name="user_id" value="' . esc($user['user_id']) . '">' : '' ?>
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= esc($user['username'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" value="<?= esc($user['email'] ?? '') ?>" required>
                </div>
                <div class="mb-3">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" value="<?= esc($user['first_name'] ?? '') ?>">
                </div>
                <div class="mb-3">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" value="<?= esc($user['last_name'] ?? '') ?>">
                </div>
                <?php if (!isset($user)): ?>
                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <?php else: ?>
                <div class="mb-3">
                    <label>Password (leave blank to keep current)</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label>Roles</label>
                    <div class="row">
                        <?php foreach ($roles as $role): ?>
                            <div class="col-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="roles[]" value="<?= $role['role_id'] ?>" id="role_<?= $role['role_id'] ?>" <?= in_array($role['role_id'], $userRoles ?? []) ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="role_<?= $role['role_id'] ?>">
                                        <?= esc($role['role_name']) ?>
                                    </label>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label>Is Active</label>
                    <input type="checkbox" name="is_active" value="1" <?= ($user['is_active'] ?? 1) ? 'checked' : '' ?>>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="/admin/user" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>