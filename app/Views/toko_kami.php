<?= $this->extend('template-main') ?>
<?= $this->section('content') ?>

<!-- Page Header -->
<div class="bg-gradient-to-r from-[#41B8EA] to-[#3EB48A] py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Toko Kami</h1>
        <p class="text-xl text-white/90 max-w-2xl mx-auto">
            Temukan berbagai pilihan AC berkualitas dengan teknologi terkini untuk kenyamanan Anda
        </p>
    </div>
</div>

<!-- Products Section -->
<div class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Filters (Optional - can be expanded later) -->
        <div class="mb-8">
            <div class="flex flex-wrap gap-4 justify-center">
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#41B8EA] focus:border-transparent">
                    <option value="">Semua Brand</option>
                    <?php foreach ($brands as $brand): ?>
                        <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
                    <?php endforeach; ?>
                </select>
                <select class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#41B8EA] focus:border-transparent">
                    <option value="">Semua Kategori</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <!-- Products Grid -->
        <?php if (!empty($products)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                <?php foreach ($products as $product): ?>
                    <div class="bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 overflow-hidden">
                        <!-- Product Image -->
                        <div class="aspect-square bg-gray-200 relative">
                            <?php if (!empty($product['main_image_url'])): ?>
                                <img src="<?= base_url($product['main_image_url']) ?>"
                                     alt="<?= esc($product['name']) ?>"
                                     class="w-full h-full object-cover">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center text-gray-400">
                                    <i data-lucide="image" class="h-12 w-12"></i>
                                </div>
                            <?php endif; ?>

                            <?php if ($product['is_featured']): ?>
                                <div class="absolute top-2 left-2 bg-[#F99C1C] text-white px-2 py-1 rounded text-xs font-semibold">
                                    Featured
                                </div>
                            <?php endif; ?>
                        </div>

                        <!-- Product Info -->
                        <div class="p-4">
                            <div class="mb-2">
                                <span class="text-xs text-gray-500 bg-gray-100 px-2 py-1 rounded">
                                    <?= esc($product['brand_name'] ?? 'Unknown Brand') ?>
                                </span>
                            </div>

                            <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2">
                                <?= esc($product['name']) ?>
                            </h3>

                            <div class="flex items-center gap-2 mb-2">
                                <span class="text-sm text-gray-600">
                                    <?= esc($product['category_name'] ?? 'Unknown Category') ?>
                                </span>
                                <?php if (!empty($product['ac_type_name'])): ?>
                                    <span class="text-xs text-gray-400">•</span>
                                    <span class="text-sm text-gray-600">
                                        <?= esc($product['ac_type_name']) ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Price -->
                            <div class="mb-3">
                                <?php if ($product['sale_price'] && $product['sale_price'] < $product['base_price']): ?>
                                    <div class="flex items-center gap-2">
                                        <span class="text-lg font-bold text-[#41B8EA]">
                                            Rp <?= number_format($product['sale_price'], 0, ',', '.') ?>
                                        </span>
                                        <span class="text-sm text-gray-500 line-through">
                                            Rp <?= number_format($product['base_price'], 0, ',', '.') ?>
                                        </span>
                                    </div>
                                <?php else: ?>
                                    <span class="text-lg font-bold text-[#41B8EA]">
                                        Rp <?= number_format($product['base_price'] ?? 0, 0, ',', '.') ?>
                                    </span>
                                <?php endif; ?>
                            </div>

                            <!-- Rating -->
                            <?php if ($product['avg_rating']): ?>
                                <div class="flex items-center gap-1 mb-3">
                                    <div class="flex">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <i data-lucide="star" class="h-4 w-4 <?= $i <= $product['avg_rating'] ? 'text-yellow-400 fill-current' : 'text-gray-300' ?>"></i>
                                        <?php endfor; ?>
                                    </div>
                                    <span class="text-sm text-gray-600">
                                        (<?= $product['review_count'] ?? 0 ?>)
                                    </span>
                                </div>
                            <?php endif; ?>

                            <!-- Action Button -->
                            <button class="w-full bg-[#41B8EA] hover:bg-[#41B8EA]/90 text-white py-2 px-4 rounded-lg transition-colors duration-200">
                                Lihat Detail
                            </button>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <i data-lucide="package" class="h-16 w-16 text-gray-300 mx-auto mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-600 mb-2">Produk Tidak Ditemukan</h3>
                <p class="text-gray-500">Belum ada produk yang tersedia saat ini.</p>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Call to Action -->
<div class="bg-[#41B8EA] py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Butuh Bantuan Memilih AC?</h2>
        <p class="text-white/90 mb-8 max-w-2xl mx-auto">
            Konsultasikan kebutuhan AC Anda dengan tim ahli kami. Kami siap membantu Anda menemukan solusi terbaik.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="https://wa.me/6285810000684" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#25D366]/90 text-white px-6 py-3 rounded-lg transition-colors">
                <i data-lucide="message-circle" class="h-5 w-5"></i>
                Hubungi via WhatsApp
            </a>
            <a href="/contact" class="inline-flex items-center gap-2 bg-white hover:bg-gray-100 text-[#41B8EA] px-6 py-3 rounded-lg transition-colors">
                <i data-lucide="mail" class="h-5 w-5"></i>
                Kirim Email
            </a>
        </div>
    </div>
</div>

<?= $this->endSection() ?>