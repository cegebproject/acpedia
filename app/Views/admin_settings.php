<?= $this->extend('template') ?>

<?= $this->section('content') ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h1 class="h3 mb-4 text-gray-800">Site Settings</h1>
        </div>
    </div>

    <!-- Notice Alert -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle me-2"></i>
                <strong>Notice:</strong> These settings are currently placeholders and do not function yet.
                This page is under development and will be implemented in future updates.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <form action="/admin/settings/save" method="post">
        <!-- General Settings -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">General Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="site_name" class="form-label">Site Name</label>
                        <input type="text" class="form-control" id="site_name" name="site_name" placeholder="ACPedia - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="site_description" class="form-label">Site Description</label>
                        <input type="text" class="form-control" id="site_description" name="site_description" placeholder="Air Conditioning Product Database - Not Functional Yet" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="site_email" class="form-label">Contact Email</label>
                        <input type="email" class="form-control" id="site_email" name="site_email" placeholder="admin@acpedia.com - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="site_phone" class="form-label">Contact Phone</label>
                        <input type="tel" class="form-control" id="site_phone" name="site_phone" placeholder="+62 123 456 7890 - Not Functional Yet" readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- SEO Settings -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">SEO Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="meta_title" class="form-label">Default Meta Title</label>
                        <input type="text" class="form-control" id="meta_title" name="meta_title" placeholder="ACPedia - Air Conditioning Products - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="meta_description" class="form-label">Default Meta Description</label>
                        <textarea class="form-control" id="meta_description" name="meta_description" rows="2" placeholder="Find the best air conditioning products with detailed specifications, reviews, and comparisons. - Not Functional Yet" readonly></textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="meta_keywords" class="form-label">Default Meta Keywords</label>
                    <input type="text" class="form-control" id="meta_keywords" name="meta_keywords" placeholder="air conditioning, AC, products, reviews, specifications - Not Functional Yet" readonly>
                </div>
            </div>
        </div>

        <!-- Social Media Settings -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Social Media Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="facebook_url" class="form-label">Facebook URL</label>
                        <input type="url" class="form-control" id="facebook_url" name="facebook_url" placeholder="https://facebook.com/acpedia - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="twitter_url" class="form-label">Twitter URL</label>
                        <input type="url" class="form-control" id="twitter_url" name="twitter_url" placeholder="https://twitter.com/acpedia - Not Functional Yet" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="instagram_url" class="form-label">Instagram URL</label>
                        <input type="url" class="form-control" id="instagram_url" name="instagram_url" placeholder="https://instagram.com/acpedia - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="linkedin_url" class="form-label">LinkedIn URL</label>
                        <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" placeholder="https://linkedin.com/company/acpedia - Not Functional Yet" readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- Email Settings -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Email Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="smtp_host" class="form-label">SMTP Host</label>
                        <input type="text" class="form-control" id="smtp_host" name="smtp_host" placeholder="smtp.gmail.com - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="smtp_port" class="form-label">SMTP Port</label>
                        <input type="number" class="form-control" id="smtp_port" name="smtp_port" placeholder="587 - Not Functional Yet" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="smtp_username" class="form-label">SMTP Username</label>
                        <input type="text" class="form-control" id="smtp_username" name="smtp_username" placeholder="noreply@acpedia.com - Not Functional Yet" readonly>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="smtp_password" class="form-label">SMTP Password</label>
                        <input type="password" class="form-control" id="smtp_password" name="smtp_password" placeholder="•••••••• - Not Functional Yet" readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- Maintenance Settings -->
        <div class="card shadow mb-4">
            <div class="card-header">
                <h5 class="card-title mb-0">Maintenance Settings</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="maintenance_mode" class="form-label">Maintenance Mode</label>
                        <select class="form-control" id="maintenance_mode" name="maintenance_mode" disabled>
                            <option value="0">Disabled - Not Functional Yet</option>
                            <option value="1">Enabled - Not Functional Yet</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="maintenance_message" class="form-label">Maintenance Message</label>
                        <input type="text" class="form-control" id="maintenance_message" name="maintenance_message" placeholder="Site is under maintenance. Please check back later. - Not Functional Yet" readonly>
                    </div>
                </div>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <a href="/admin/dashboard" class="btn btn-secondary">
                        <i class="fas fa-arrow-left me-1"></i> Back to Dashboard
                    </a>
                    <button type="submit" class="btn btn-primary" disabled>
                        <i class="fas fa-save me-1"></i> Save Settings (Not Functional)
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection() ?>

<?= $this->section('javascript') ?>
<script>
    // Add visual indication that fields are disabled
    document.addEventListener('DOMContentLoaded', function() {
        const inputs = document.querySelectorAll('input, textarea, select');
        inputs.forEach(input => {
            if (input.hasAttribute('readonly') || input.hasAttribute('disabled')) {
                input.style.backgroundColor = '#f8f9fa';
                input.style.cursor = 'not-allowed';
            }
        });
    });
</script>
<?= $this->endSection() ?>