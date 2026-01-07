<?= $this->extend('template-main') ?>

<?= $this->section('content') ?>

<?php
// Technical field mapping grouped by category
$groupedSpecs = [
    'Informasi Unit' => [
        'model_indoor'      => 'Model Indoor',
        'model_outdoor'     => 'Model Outdoor',
        'made_in'           => 'Negara Pembuat',
        'refrigerant_type'  => 'Tipe Refrigerant',
    ],
    'Performa & Kelistrikan' => [
        'btu_per_hour'      => 'Kapasitas (BTU/h)',
        'daya_listrik'      => 'Daya Listrik (Watt)',
        'bobot_tkdn'        => 'Bobot TKDN (%)',
    ],
    'Dimensi & Berat' => [
        'dimensi_indoor'    => 'Dimensi Indoor (mm)',
        'dimensi_outdoor'   => 'Dimensi Outdoor (mm)',
        'indoor_weight_kg'  => 'Berat Indoor (kg)',
        'outdoor_weight_kg' => 'Berat Outdoor (kg)',
    ],
    'Instalasi Pipa' => [
        'liquid_pipe_size_inches' => 'Ukuran Pipa Cair',
        'gas_pipe_size_inches'    => 'Ukuran Pipa Gas',
        'max_pipe_length_m'       => 'Max. Panjang Pipa (m)',
        'max_pipe_height_m'       => 'Max. Tinggi Pipa (m)',
    ],
    'Garansi' => [
        'garansi_sparepart'  => 'Garansi Sparepart',
        'garansi_kompressor' => 'Garansi Kompresor',
    ]
];
?>

<style>
    /* Print Guard */
    @media print {
        .search-container, .remove-btn, .no-print, button { display: none !important; }
        .custom-scrollbar { overflow: visible !important; }
        .min-w-\[1000px\] { min-width: 100% !important; width: 100% !important; }
    }
    .search-results-dropdown { z-index: 100; }
</style>

<main class="container mx-auto px-4 py-8 mb-12">
    <h1 class="text-[#373e51] text-3xl font-medium font-roboto mb-8 text-center md:text-left">Komparasi Produk</h1>

    <div class="relative overflow-x-auto custom-scrollbar pb-6">
        <div class="min-w-[1000px] grid grid-cols-[180px_1fr_1fr_1fr] gap-0 border-b border-gray-200">
            
            <div class="p-4 flex items-center font-bold text-[#222]">Cari & Ganti</div>
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="p-4 border-l border-transparent">
                    <div class="bg-[#f3f3f3] p-4 rounded-lg relative search-container">
                        <div class="text-xs mb-2 text-[#222] font-semibold">Slot <?= $i ?>: <?= isset($products[$i]) ? 'Ganti Produk' : 'Pilih Produk' ?></div>
                        <div class="relative">
                            <input type="text" placeholder="Telusuri produk..." class="compare-search-input w-full h-[40px] pl-4 pr-10 rounded border border-[#e7e7e7] text-sm focus:outline-none focus:border-[#41B8EA]">
                            <i data-lucide="search" class="absolute right-3 top-1/2 -translate-y-1/2 w-4 h-4 text-[#6c757d]"></i>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>

            <div class="p-4 bg-white"></div> 
            <?php for ($i = 1; $i <= 3; $i++): ?>
                <div class="p-4 border-l border-dashed border-gray-200 text-center relative bg-white">
                    <?php if (isset($products[$i]) && $products[$i]): $p = $products[$i]; ?>
                        <button onclick="removeProduct(<?= $i ?>)" class="remove-btn absolute top-0 right-0 bg-red-500 text-white p-1.5 rounded-bl-lg hover:bg-red-600 transition-colors z-10">
                            <i data-lucide="x" class="w-4 h-4"></i>
                        </button>

                        <h3 class="font-bold text-[16px] text-[#222] leading-tight mb-4 min-h-[44px]"><?= esc($p['name']) ?></h3>
                        <div class="h-[220px] w-full flex items-center justify-center mb-4">
                            <img src="<?= $p['main_image_url'] ?>" alt="<?= esc($p['name']) ?>" class="max-h-full object-contain mix-blend-multiply">
                        </div>
                        
                        <div class="text-[22px] text-[#3eb48a] font-bold mb-4">
                            Rp <?= number_format($p['sale_price'] ?: $p['base_price'], 0, ',', '.') ?>
                        </div>

                        <div class="flex items-center justify-center gap-2">
                            <span class="bg-[#41b8ea] text-white text-[12px] px-2 py-1 rounded"><?= esc($p['pk_name'] ?? '-') ?></span>
                            <span class="bg-[#3eb48a] text-white text-[12px] px-2 py-1 rounded"><?= esc($p['ac_type_name'] ?? '-') ?></span>
                        </div>
                    <?php else: ?>
                        <div class="h-full flex flex-col items-center justify-center text-gray-300 italic border-2 border-dashed border-gray-100 rounded-xl p-8">
                            <i data-lucide="plus-circle" class="w-12 h-12 mb-2 opacity-20"></i>
                            <p>Slot <?= $i ?> Kosong</p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endfor; ?>

            <?php 
            $globalRowIndex = 0;
            foreach ($groupedSpecs as $categoryName => $fields): 
                $activeFields = [];
                foreach ($fields as $fieldKey => $label) {
                    foreach ($products as $p) {
                        if ($p && !empty($p[$fieldKey])) { $activeFields[$fieldKey] = $label; break; }
                    }
                }

                if (!empty($activeFields)): ?>
                    <div class="col-span-4 px-4 py-2 bg-gray-100 text-[#373e51] font-bold text-xs uppercase tracking-widest border-t border-b border-[#dee2e6]">
                        <?= $categoryName ?>
                    </div>

                    <?php foreach ($activeFields as $fieldKey => $label): 
                        $globalRowIndex++;
                        $bgColor = ($globalRowIndex % 2 == 0) ? 'bg-white' : 'bg-[#f9f9f9]';
                    ?>
                        <div class="px-4 py-3 <?= $bgColor ?> border-b border-[#dee2e6] font-bold text-[14px] flex items-center"><?= $label ?></div>
                        <?php for ($i = 1; $i <= 3; $i++): ?>
                            <div class="px-4 py-3 <?= $bgColor ?> border-b border-[#dee2e6] border-l border-dashed border-gray-200 text-[14px]">
                                <?= (isset($products[$i]) && !empty($products[$i][$fieldKey])) ? esc($products[$i][$fieldKey]) : '-' ?>
                            </div>
                        <?php endfor; ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="flex flex-col items-center gap-6 mt-12 no-print">
        <button onclick="window.print()" class="bg-[#41b8ea] hover:bg-[#3aa3d0] text-white font-bold py-3 px-10 rounded-full shadow-lg flex items-center gap-2 transition-transform hover:scale-105">
            <i data-lucide="printer" class="w-5 h-5"></i> Cetak Komparasi
        </button>

        <div class="text-center">
            <p class="text-gray-400 text-sm mb-4 font-medium italic">Bagikan perbandingan ini:</p>
            <div class="flex gap-4">
                <button onclick="shareLink('wa')" class="p-3 bg-[#25D366] text-white rounded-full hover:opacity-80 transition-shadow shadow-md"><i data-lucide="phone"></i></button>
                <button onclick="shareLink('fb')" class="p-3 bg-[#1877F2] text-white rounded-full hover:opacity-80 transition-shadow shadow-md"><i data-lucide="facebook"></i></button>
                <button onclick="shareLink('x')" class="p-3 bg-black text-white rounded-full hover:opacity-80 transition-shadow shadow-md"><i data-lucide="twitter"></i></button>
                <button onclick="shareLink('copy')" class="p-3 bg-gray-600 text-white rounded-full hover:opacity-80 transition-shadow shadow-md"><i data-lucide="link"></i></button>
            </div>
        </div>
    </div>
</main>

<script>
/**
 * State Management & Synchronization
 */
const COMPARE_STORAGE_KEY = 'acpedia_compare_list';
const currentSlugs = {
    1: '<?= $slug1 ?? "empty" ?>',
    2: '<?= $slug2 ?? "empty" ?>',
    3: '<?= $slug3 ?? "empty" ?>'
};

function syncStorageWithPage() {
    const pageProducts = [];
    <?php foreach ($products as $slotNum => $p): ?>
        <?php if ($p): ?>
            pageProducts.push({ slug: '<?= $p['slug'] ?>', name: '<?= addslashes(esc($p['name'])) ?>' });
        <?php endif; ?>
    <?php endforeach; ?>
    localStorage.setItem(COMPARE_STORAGE_KEY, JSON.stringify(pageProducts));
    if (typeof updateCompareWidget === 'function') updateCompareWidget();
}

document.addEventListener('DOMContentLoaded', () => {
    syncStorageWithPage();
    if (window.lucide) lucide.createIcons();
});

/**
 * Navigation & Logic
 */
function redirectWithSlugs() {
    const baseUrl = '<?= base_url('komparasi') ?>';
    window.location.href = `${baseUrl}/${currentSlugs[1]}/${currentSlugs[2]}/${currentSlugs[3]}`;
}

function removeProduct(slotNum) {
    currentSlugs[slotNum] = 'empty';
    redirectWithSlugs();
}

document.querySelectorAll('.compare-search-input').forEach((input, index) => {
    const slotNum = index + 1;
    input.addEventListener('input', async (e) => {
        const query = e.target.value;
        const container = e.target.closest('.search-container');
        let dropdown = container.querySelector('.search-results-dropdown');
        if (dropdown) dropdown.remove();

        if (query.length < 2) return;

        try {
            const response = await fetch(`<?= base_url('toko/searchProducts') ?>?q=${encodeURIComponent(query)}`);
            const data = await response.json();

            if (data.length > 0) {
                dropdown = document.createElement('div');
                dropdown.className = 'search-results-dropdown absolute left-0 right-0 mt-1 bg-white border border-gray-200 shadow-2xl rounded-lg overflow-hidden';
                
                data.forEach(item => {
                    if (Object.values(currentSlugs).includes(item.slug)) return;

                    const row = document.createElement('div');
                    row.className = 'p-3 hover:bg-gray-50 cursor-pointer flex items-center gap-3 border-b last:border-0';
                    row.innerHTML = `<img src="${item.main_image_url}" class="w-10 h-10 object-contain"><div class="text-xs font-bold text-gray-800 line-clamp-1">${item.name}</div>`;
                    row.onclick = () => {
                        currentSlugs[slotNum] = item.slug;
                        redirectWithSlugs();
                    };
                    dropdown.appendChild(row);
                });
                container.appendChild(dropdown);
            }
        } catch (err) { console.error(err); }
    });
});

function shareLink(platform) {
    const url = encodeURIComponent(window.location.href);
    const text = encodeURIComponent("Cek komparasi AC di ACpedia!");
    let shareUrl = '';
    switch (platform) {
        case 'wa': shareUrl = `https://api.whatsapp.com/send?text=${text}%20${url}`; break;
        case 'fb': shareUrl = `https://www.facebook.com/sharer/sharer.php?u=${url}`; break;
        case 'x': shareUrl = `https://twitter.com/intent/tweet?url=${url}&text=${text}`; break;
        case 'copy': navigator.clipboard.writeText(window.location.href); alert("Tautan disalin!"); return;
    }
    if (shareUrl) window.open(shareUrl, '_blank', 'width=600,height=400');
}

document.addEventListener('click', (e) => {
    if (!e.target.closest('.search-container')) {
        document.querySelectorAll('.search-results-dropdown').forEach(el => el.remove());
    }
});
</script>

<?= $this->endSection() ?>