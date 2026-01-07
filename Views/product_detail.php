<?= $this->extend('template-main') ?>

<?= $this->section('content') ?>

<body class="min-h-screen bg-gray-50 font-sans text-[#222]">
    
    <div style="
    position: sticky;
    top: 0;
    z-index: 9;
    background-color: #FFF7ED;
    color: #9A3412;
    padding: 10px 16px;
    text-align: center;
    font-size: 14px;
    font-weight: 500;
    border-bottom: 1px solid #FED7AA;
">
    ⚠️ Cart and Review Functionality are not available yet
</div>


    <main class="container mx-auto px-4 py-6 md:py-8 max-w-[1280px]">
        <!-- Breadcrumb / Back Button -->
        <div class="mb-6 flex items-center gap-2 text-sm text-gray-500">
<button onclick="window.location.replace('/toko-kami')" class="flex items-center hover:text-[#41B8EA] transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4 mr-1"></i>
                Kembali ke Toko
            </button>
            <span>/</span>
            <span><?= esc($product['ac_type_name']) ?></span>
            <span>/</span>
            <span class="text-gray-900 font-medium"><?= esc($product['name']) ?></span>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            <!-- Left Column - Images & Details -->
            <div class="lg:col-span-8 space-y-8">
                <!-- Product Header (Mobile only) -->
                <div class="lg:hidden space-y-4">
                    <h1 class="text-xl md:text-2xl font-bold text-[#212529]">
                        <?= esc($product['name']) ?>
                    </h1>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-1">
                            <i data-lucide="star" class="w-4 h-4 fill-[#F99C1C] text-[#F99C1C]"></i>
                            <span class="font-bold text-[#212529]"><?= esc($product['avg_rating']) ?></span>
                            <span class="text-gray-500 text-sm">(<?= esc($product['review_count']) ?> Review)</span>
                        </div>
                        <div class="text-sm text-gray-500">|</div>
                        <div class="text-sm text-gray-500">95 Penjualan</div>
                    </div>
                </div>

                <!-- Images Section -->
                <div class="bg-white p-4 rounded-xl shadow-sm border border-gray-100">
                    <div class="aspect-[4/3] w-full relative mb-4 flex items-center justify-center bg-gray-50 rounded-lg overflow-hidden">
                        <img 
                            id="main-image"
                            src=" <?= esc($product['main_image_url']) ?? "" ?>" 
                            alt=" <?= esc($product['name']) ?? "Tidak ada deskripsi untuk produk ini." ?>" 
                            class="max-h-full w-auto object-contain mix-blend-multiply"
                        />
                        <!-- Badges -->
                        <div class="absolute top-4 left-4 flex flex-col gap-2">
                            <span class="bg-[#41B8EA] text-white text-xs font-bold px-3 py-1.5 rounded shadow-sm">
                                <?= esc($product['pk_name']) ?>
                            </span>
                            <span class="bg-[#3EB48A] text-white text-xs font-bold px-3 py-1.5 rounded shadow-sm">
                                <?= esc($product['category_name']) ?>
                            </span>
                        </div>
                    </div>
                    
                    <div class="flex gap-2 overflow-x-auto pb-2 scrollbar-hide">
                        <!-- Thumbnails -->
                         <!-- Using the same image for demo purposes since we don't have multiple unique AC images handy -->
                         <button onclick="changeImage(this, '<?= esc($product['main_image_url']) ?? "" ?>')" class="thumb-btn flex-shrink-0 w-20 h-20 border-2 rounded-lg p-1 transition-all border-[#41B8EA] ring-2 ring-[#41B8EA]/20">
                            <img src="<?= esc($product['main_image_url']) ?? "" ?>" alt="<?= esc($product['name']) ?? "" ?>" class="w-full h-full object-contain" />
                        </button>
                     <?php
$images = is_array($product['additional_image_urls'])
    ? $product['additional_image_urls']
    : json_decode($product['additional_image_urls'] ?? '[]', true);
?>

<?php if (!empty($images)): ?>
    <?php foreach ($images as $index => $image): ?>
        <button
            onclick="changeImage(this, '<?= esc($image) ?>')"
            class="thumb-btn flex-shrink-0 w-20 h-20 border-2 rounded-lg p-1 transition-all border-gray-200 hover:border-[#41B8EA]/50"
        >
            <img
                src="<?= esc($image) ?>"
                alt="Thumbnail <?= $index + 1 ?>"
                class="w-full h-full object-contain"
            />
        </button>
    <?php endforeach; ?>
<?php endif; ?>

                    </div>
                </div>

                <!-- Specifications -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-6 border-b border-gray-100">
                        <h2 class="text-lg font-bold text-[#212529]">Spesifikasi Produk</h2>
                    </div>
                    <div class="divide-y divide-gray-100 text-sm">
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Brand</div>
                            <div class="col-span-7 text-gray-900 font-bold italic text-[#007ad0]"><?= esc($product['brand_name']) ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Unduh E-Katalog</div>
                            <div class="col-span-7 text-gray-900 font-bold italic text-[#007ad0] underline cursor-pointer"><?= esc($product['name']) ?> (PDF)</div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Tipe AC</div>
                            <div class="col-span-7 text-gray-900"><?= esc($product['ac_type_name']) ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Kapasitas PK</div>
                            <div class="col-span-7 text-gray-900 font-bold"><?= esc($product['pk_name']) ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Daya Listrik</div>
                            <div class="col-span-7 text-gray-900"><?= esc($product['daya_listrik'])." Watt" ?? "Tidak Diketahui" ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Kapasitas Pendinginan</div>
                            <div class="col-span-7 text-gray-900">-</div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Tipe Refrigrant</div>
                            <div class="col-span-7 text-gray-900"><?= esc($product['refrigerant_type']) ?? "Tidak Diketahui" ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Tingkat Tekanan Suara</div>
                            <div class="col-span-7 text-gray-900">-</div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Pipa Gas Cair</div>
                            <div class="col-span-7 text-gray-900"><?= esc($product['liquid_pipe_size_inches']) ?? "Tidak Diketahui" ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Dimensi T x L x P</div>
                            <div class="col-span-7 text-gray-900">In: <?= esc($product['dimensi_indoor']) ?? "Tidak Diketahui" ?> / Out: <?= esc($product['dimensi_outdoor']) ?? "Tidak Diketahui" ?></div>
                            
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Garansi</div>
                            <div class="col-span-7 text-gray-900"><?= esc($product['warranty_info']) ?? "Tidak Tersedia" ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Tipe Indoor</div>
                            <div class="col-span-7 text-gray-900 font-bold"><?= esc($product['model_indoor']) ?? "Tidak Diketahui" ?></div>
                        </div>
                        <div class="grid grid-cols-12 gap-4 py-3 px-4 hover:bg-gray-50 transition-colors">
                            <div class="col-span-5 text-gray-600 font-light">Negara Pembuat</div>
                            <div class="col-span-7 text-gray-900 font-bold"><?= esc($product['made_in']) ?? "Tidak Diketahui" ?></div>
                        </div>
                    </div>
                </div>
                
                <!-- Reviews Section -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <div class="flex items-center gap-3 mb-6">
                        <h2 class="text-xl font-bold text-[#41B8EA]">Review Produk</h2>
                        <div class="h-px flex-1 bg-gray-100"></div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-8 items-center md:items-start mb-10">
                        <div class="text-center md:text-left min-w-[200px]">
                            <div class="text-6xl font-bold text-[#555]"><?= esc($product['avg_rating']) ?? "0" ?></div>
                            <div class="flex items-center justify-center md:justify-start gap-1 my-2">
                                <i data-lucide="star" class="w-5 h-5 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-5 h-5 fill-[#F99C1C] text-[#F99C1C]"></i>
                            </div>
                            <div class="text-sm text-gray-500">Berdasarkan <?= esc($product['review_count']) ?? "0" ?> review</div>
                        </div>
                        
                        <div class="flex-1 w-full space-y-2">
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1 w-12">
                                    <i data-lucide="star" class="w-3 h-3 fill-gray-400 text-gray-400"></i>
                                    <span class="text-xs font-medium text-gray-600">5</span>
                                </div>
                                <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#F99C1C]" style="width: 100%"></div>
                                </div>
                                <div class="text-xs text-gray-400 w-8 text-right">100</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1 w-12">
                                    <i data-lucide="star" class="w-3 h-3 fill-gray-400 text-gray-400"></i>
                                    <span class="text-xs font-medium text-gray-600">4</span>
                                </div>
                                <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#F99C1C]" style="width: 100%"></div>
                                </div>
                                <div class="text-xs text-gray-400 w-8 text-right">100</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1 w-12">
                                    <i data-lucide="star" class="w-3 h-3 fill-gray-400 text-gray-400"></i>
                                    <span class="text-xs font-medium text-gray-600">3</span>
                                </div>
                                <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#F99C1C]" style="width: 100%"></div>
                                </div>
                                <div class="text-xs text-gray-400 w-8 text-right">100</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1 w-12">
                                    <i data-lucide="star" class="w-3 h-3 fill-gray-400 text-gray-400"></i>
                                    <span class="text-xs font-medium text-gray-600">2</span>
                                </div>
                                <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#F99C1C]" style="width: 100%"></div>
                                </div>
                                <div class="text-xs text-gray-400 w-8 text-right">100</div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="flex items-center gap-1 w-12">
                                    <i data-lucide="star" class="w-3 h-3 fill-gray-400 text-gray-400"></i>
                                    <span class="text-xs font-medium text-gray-600">1</span>
                                </div>
                                <div class="flex-1 h-2 bg-gray-100 rounded-full overflow-hidden">
                                    <div class="h-full bg-[#F99C1C]" style="width: 100%"></div>
                                </div>
                                <div class="text-xs text-gray-400 w-8 text-right">100</div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-6">
                        <h3 class="font-bold text-[#333] border-b pb-2">Latest Review</h3>
                        
                        <div class="py-4 border-b border-gray-50 last:border-0">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-500">M</div>
                                    <div>
                                        <div class="text-sm font-bold text-[#3EB48A]">M Suseno</div>
                                        <div class="text-xs text-[#41B8EA] flex items-center gap-1">
                                             <i data-lucide="check" class="w-3 h-3"></i> Pembeli Terverifikasi
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs text-gray-400">2 Minggu lalu</div>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Emg dari dulu udah langganan pake sharp, cocok buat pasang dirumah... Ramah dikantong juga harganya. Beli di Selka.id karena dikasi tau temen, buat beli di webnya aja lebih murah katanya... Pelayanannya gercep, adminnya juga sopan pokoknya top... Rekomended buat yang mau beli disini banyak cashbacknya juga...
                            </p>
                        </div>
                        
                        <div class="py-4 border-b border-gray-50 last:border-0">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-500">W</div>
                                    <div>
                                        <div class="text-sm font-bold text-[#3EB48A]">Watie</div>
                                        <div class="text-xs text-[#41B8EA] flex items-center gap-1">
                                             <i data-lucide="check" class="w-3 h-3"></i> Pembeli Terverifikasi
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs text-gray-400">1 Bulan lalu</div>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Pelayanan yg bagus dan terpercaya. Teknisi informatif dan pemasangannya rapih. Yang perlu ditambahkan cuma pilihan jadwal pemasangan agar ada pilihan. Tapi keseluruhannya saya cukup puas jadi customer di Selka.
                            </p>
                        </div>

                        <div class="py-4 border-b border-gray-50 last:border-0">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-500">A</div>
                                    <div>
                                        <div class="text-sm font-bold text-[#3EB48A]">Azis</div>
                                        <div class="text-xs text-[#41B8EA] flex items-center gap-1">
                                             <i data-lucide="check" class="w-3 h-3"></i> Pembeli Terverifikasi
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs text-gray-400">1 Bulan lalu</div>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Dingin.. tidak brisik
                            </p>
                        </div>
                        
                        <div class="py-4 border-b border-gray-50 last:border-0">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center gap-2">
                                    <div class="w-8 h-8 rounded-full bg-gray-200 flex items-center justify-center text-xs font-bold text-gray-500">W</div>
                                    <div>
                                        <div class="text-sm font-bold text-[#3EB48A]">Wiratama Jody</div>
                                        <div class="text-xs text-[#41B8EA] flex items-center gap-1">
                                             <i data-lucide="check" class="w-3 h-3"></i> Pembeli Terverifikasi
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xs text-gray-400">2 Bulan lalu</div>
                            </div>
                            <div class="flex items-center gap-1 mb-2">
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                                <i data-lucide="star" class="w-3 h-3 fill-[#F99C1C] text-[#F99C1C]"></i>
                            </div>
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Ac dingin bgt menggigil..mantap
                            </p>
                        </div>
                    </div>

                    <div class="mt-8 text-center">
                         <button class="px-6 py-2 border border-gray-300 rounded-full text-sm font-medium text-gray-600 hover:bg-gray-50 hover:text-[#41B8EA] hover:border-[#41B8EA] transition-colors">
                           Show All Reviews
                         </button>
                    </div>
                </div>
            </div>

            <!-- Right Column - Purchase Card & Description -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Desktop Title -->
                <div class="hidden lg:block space-y-4">
                    <h1 class="text-2xl font-bold text-[#212529] leading-tight">
                        <?= esc($product['name']) ?? "Tidak Diketahui" ?>
                    </h1>
                    <div class="flex items-center gap-4">
                        <div class="flex items-center gap-1">
                            <i data-lucide="star" class="w-4 h-4 fill-[#F99C1C] text-[#F99C1C]"></i>
                            <span class="font-bold text-[#212529]"><?= esc($product['avg_rating']) ?? "Tidak Diketahui" ?></span>
                            <span class="text-gray-500 text-sm">(<?= esc($product['review_count']) ?? "Tidak Diketahui" ?> Review)</span>
                        </div>
                        <div class="text-sm text-gray-500">|</div>
                        <div class="text-sm text-gray-500">9999 Penjualan</div>
                    </div>
                </div>

                <!-- Purchase Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <div class="space-y-4">
                        <?php
$basePrice = (float) ($product['base_price'] ?? 0);
$salePrice = (float) ($product['sale_price'] ?? 0);

$hasDiscount = $basePrice > $salePrice && $salePrice > 0;

$discountPercent = $hasDiscount
    ? round((($basePrice - $salePrice) / $basePrice) * 100)
    : 0;

function rupiah($amount) {
    return 'Rp ' . number_format($amount, 0, ',', '.');
}
?>

<?php if ($hasDiscount): ?>
    <div>
        <div class="text-sm text-gray-500 mb-1">Harga Awal</div>
        <div class="flex items-center gap-2">
            <span class="text-gray-400 line-through text-sm">
                <?= rupiah($basePrice) ?>
            </span>
            <span class="text-[#F99C1C] text-xs font-bold bg-[#F99C1C]/10 px-1.5 py-0.5 rounded">
                -<?= $discountPercent ?>%
            </span>
        </div>
    </div>
<?php endif; ?>

<div>
    <div class="text-sm text-gray-500 mb-1">Harga</div>
    <div class="text-2xl font-bold text-[#3EB48A]">
        <?= $salePrice > 0 ? rupiah($salePrice) : "Tidak Diketahui" ?>
    </div>
</div>


                        <div class="pt-4 border-t border-gray-100">
                            <div class="flex items-center justify-between mb-2">
                                <span class="text-sm font-medium text-[#212529]">Jumlah</span>
                                <span class="text-sm text-gray-500">Stok Tersedia</span>
                            </div>
                            <div class="flex items-center gap-4">
                                <div class="flex items-center border border-gray-300 rounded-md">
                                    <button id="btn-minus" class="p-2 hover:bg-gray-100 text-gray-600 transition-colors">
                                        <i data-lucide="minus" class="w-4 h-4"></i>
                                    </button>
                                    <div id="qty-display" class="w-12 text-center font-medium text-gray-700">1</div>
                                    <button id="btn-plus" class="p-2 hover:bg-gray-100 text-gray-600 transition-colors">
                                        <i data-lucide="plus" class="w-4 h-4"></i>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-2 gap-3 pt-4">
                            <button onclick="addToCart()" class="w-full bg-[#F99C1C] hover:bg-[#F99C1C]/90 text-white font-bold h-11 rounded-md transition-colors text-sm">
                                Beli Sekarang
                            </button>
                            <button onclick="addToCart()" class="w-full border border-gray-300 hover:bg-gray-50 text-[#222] font-medium h-11 rounded-md transition-colors text-sm flex items-center justify-center gap-2">
                                <i data-lucide="plus" class="w-4 h-4"></i>
                                Tambah
                            </button>
                        </div>
                        
                        
                        
                        
                        <button  data-compare-slug="<?= $product['slug'] ?>" 
    data-compare-name="<?= esc($product['name']) ?>"
    class="compare-toggle-btn w-full border border-[#41B8EA] text-[#41B8EA] hover:bg-[#41B8EA] hover:text-white font-medium h-11 mt-3 rounded-md transition-colors text-sm">
                            Komparasi
                        </button>
                    </div>
                </div>

                <!-- Description Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">
                    <div class="border-b border-gray-100 pb-4 mb-4">
                        <h3 class="font-bold text-lg text-[#212529] leading-snug">
                            Deskripsi  <?= esc($product['name']) ?? "Tidak Diketahui" ?> -  <?= esc($product['model_indoor']) ?? "" ?>
                        </h3>
                    </div>
                    
                    <div class="space-y-6 text-sm text-[#212529] font-light leading-relaxed">
                        <div style="
    white-space: pre-line;
    word-wrap: break-word;
    line-height: 1.6;
">
   <?= esc($product['general_description']) ?? "Tidak ada deskripsi untuk produk ini." ?>
</div>
                     
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Image Gallery Logic
        function changeImage(btn, src) {
            document.getElementById('main-image').src = src;
            
            // Remove active class from all buttons
            document.querySelectorAll('.thumb-btn').forEach(b => {
                b.classList.remove('border-[#41B8EA]', 'ring-2', 'ring-[#41B8EA]/20');
                b.classList.add('border-gray-200', 'hover:border-[#41B8EA]/50');
            });

            // Add active class to clicked button
            btn.classList.remove('border-gray-200', 'hover:border-[#41B8EA]/50');
            btn.classList.add('border-[#41B8EA]', 'ring-2', 'ring-[#41B8EA]/20');
        }

        // Quantity Logic
        let qty = 1;
        const qtyDisplay = document.getElementById('qty-display');
        const btnMinus = document.getElementById('btn-minus');

        document.getElementById('btn-plus').addEventListener('click', () => {
            qty++;
            updateQty();
        });

        document.getElementById('btn-minus').addEventListener('click', () => {
            if (qty > 1) {
                qty--;
                updateQty();
            }
        });

        function updateQty() {
            qtyDisplay.textContent = qty;
            if(qty <= 1) {
                btnMinus.setAttribute('disabled', 'true');
                btnMinus.classList.add('opacity-50', 'cursor-not-allowed');
            } else {
                btnMinus.removeAttribute('disabled');
                btnMinus.classList.remove('opacity-50', 'cursor-not-allowed');
            }
        }
        
        // Initialize state
        updateQty();

        // Button Actions
        function addToCart() {
            alert(`Berhasil menambahkan ${qty} unit ke keranjang!`);
        }

        function compareProduct() {
            alert('Fitur komparasi akan segera hadir!');
        }
    </script>
</body>


<?= $this->endSection() ?>


