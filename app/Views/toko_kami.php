<?= $this->extend('template-main') ?>
<?= $this->section('content') ?>


<body>


    <!-- Tagline -->
    <div class="bg-white py-4">
        <div class="container mx-auto px-4 text-center">
            <img 
                src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\quote.png" 
                alt="every AC holds a journey, we ensure it lasts!"
                class="mx-auto h-20 md:h-24 lg:h-32"
            />
        </div>
    </div>

<!-- Services Icons -->
    <div class="bg-white py-5 border-b">
        <div class="container mx-auto px-4">
            <!-- Mobile Dropdown -->
            <div class="md:hidden">
                <button id="servicesToggle" class="w-full flex items-center justify-between px-4 py-3 bg-white border border-gray-300 rounded-lg hover:border-[#41B8EA] transition-colors">
                    <span class="font-semibold text-[#373E51]">Layanan Kami</span>
                    <i data-lucide="chevron-down" id="servicesChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                </button>
                <div id="servicesContent" class="dropdown-content mt-3 space-y-2">
                    <!-- PK Calculator -->
                    <button class="service-btn w-full flex items-center gap-3 px-4 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#3EB48A] transition-all duration-200">
                        <div class="flex-shrink-0 w-[42px] h-[42px] rounded-full bg-[#3EB48A] flex items-center justify-center relative">
                            <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\pkcal.png" alt="PK Calculator" class="w-5 h-5 object-contain brightness-0 invert">
                        </div>
                        <span class="font-semibold text-[#1c1c24]">PK Calculator</span>
                    </button>

                    <!-- Proyek HVAC -->
                    <button class="service-btn w-full flex items-center gap-3 px-4 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#41B8EA] transition-all duration-200">
                        <div class="flex-shrink-0 w-[42px] h-[42px] rounded-full bg-[#41B8EA] flex items-center justify-center">
                            <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\hvac.png" alt="Proyek HVAC" class="w-5 h-5 object-contain brightness-0 invert">
                        </div>
                        <span class="font-semibold text-[#1c1c24]">Proyek HVAC</span>
                    </button>

                    <!-- Pasang unit -->
                    <button class="service-btn w-full flex items-center gap-3 px-4 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#F99C1C] transition-all duration-200">
                        <div class="flex-shrink-0 w-[42px] h-[42px] rounded-full bg-[#F99C1C] flex items-center justify-center">
                            <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\pasang.png" alt="Pasang Unit" class="w-5 h-5 object-contain brightness-0 invert">
                        </div>
                        <span class="font-semibold text-[#1c1c24]">Pasang unit</span>
                    </button>

                    <!-- Perawatan -->
                    <button class="service-btn w-full flex items-center gap-3 px-4 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#ED2024] transition-all duration-200">
                        <div class="flex-shrink-0 w-[42px] h-[42px] rounded-full bg-[#ED2024] flex items-center justify-center">
                            <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\perawatan2.png" alt="Perawatan" class="w-5 h-5 object-contain brightness-0 invert">
                        </div>
                        <span class="font-semibold text-[#1c1c24]">Perawatan</span>
                    </button>

                    <!-- Perbaikan -->
                    <button class="service-btn w-full flex items-center gap-3 px-4 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#373E51] transition-all duration-200">
                        <div class="flex-shrink-0 w-[42px] h-[42px] rounded-full bg-[#373E51] flex items-center justify-center">
                            <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\perbaikan2.png" alt="Perbaikan" class="w-5 h-5 object-contain brightness-0 invert">
                        </div>
                        <span class="font-semibold text-[#1c1c24]">Perbaikan</span>
                    </button>
                </div>
            </div>

            <!-- Desktop Services - Centered -->
            <div class="hidden md:flex justify-center items-center gap-4">
                <button class="service-btn flex items-center gap-3 px-6 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#3EB48A]">
                    <div class="w-10 h-10 rounded-full bg-[#3EB48A] flex items-center justify-center">
                        <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\pkcal.png" alt="PK Calculator" class="h-5 w-5 object-contain brightness-0 invert">
                    </div>
                    <span class="font-semibold text-[#1c1c24]">PK Calculator</span>
                </button>
                <button class="service-btn flex items-center gap-3 px-6 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#41B8EA]">
                    <div class="w-10 h-10 rounded-full bg-[#41B8EA] flex items-center justify-center">
                        <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\hvac.png" alt="Proyek HVAC" class="h-5 w-5 object-contain brightness-0 invert">
                    </div>
                    <span class="font-semibold text-[#1c1c24]">Proyek HVAC</span>
                </button>
                <button class="service-btn flex items-center gap-3 px-6 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#F99C1C]">
                    <div class="w-10 h-10 rounded-full bg-[#F99C1C] flex items-center justify-center">
                        <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\pasang.png" alt="Pasang Unit" class="h-5 w-5 object-contain brightness-0 invert">
                    </div>
                    <span class="font-semibold text-[#1c1c24]">Pasang unit</span>
                </button>
                <button class="service-btn flex items-center gap-3 px-6 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#ED2024]">
                    <div class="w-10 h-10 rounded-full bg-[#ED2024] flex items-center justify-center">
                        <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\perawatan2.png" alt="Perawatan" class="h-5 w-5 object-contain brightness-0 invert">
                    </div>
                    <span class="font-semibold text-[#1c1c24]">Perawatan</span>
                </button>
                <button class="service-btn flex items-center gap-3 px-6 py-3 bg-white border border-gray-300 rounded-full hover:shadow-lg hover:border-[#373E51]">
                    <div class="w-10 h-10 rounded-full bg-[#373E51] flex items-center justify-center">
                        <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\perbaikan2.png" alt="Perbaikan" class="h-5 w-5 object-contain brightness-0 invert">
                    </div>
                    <span class="font-semibold text-[#1c1c24]">Perbaikan</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Brand Logos -->
    <div class="bg-white py-6 border-b">
        <div class="container mx-auto px-4">
            <div class="flex justify-center items-center gap-4 md:gap-6 lg:gap-8 flex-wrap">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\samsung.png" alt="SAMSUNG" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\sharp.png" alt="SHARP" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\changhong.png" alt="CHANGHONG" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\daikin.png" alt="DAIKIN" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\flife.png" alt="FLIFE" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\gree.png" alt="GREE" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\lg.png" alt="LG" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\midea.png" alt="MIDEA" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\panasonic.png" alt="PANASONIC" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
                <img src="C:\Users\Dody\Desktop\ACpedia\ACpedia\assets\polytron.png" alt="POLYTRON" class="brand-logo h-6 md:h-7 lg:h-8 w-auto object-contain cursor-pointer">
            </div>
        </div>
    </div>

    <!-- PK Categories -->
    <div class="bg-white py-4 border-b">
        <div class="container mx-auto px-4">
            <!-- Mobile Dropdown -->
            <div class="md:hidden">
                <button id="pkCategoriesToggle" class="w-full flex items-center justify-between px-4 py-3 bg-white border border-gray-300 rounded-lg hover:border-[#41B8EA] transition-colors">
                    <span class="font-semibold text-[#373E51]">Kapasitas PK</span>
                    <i data-lucide="chevron-down" id="pkCategoriesChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                </button>
                <div id="pkCategoriesContent" class="dropdown-content mt-3 space-y-3">
                    <!-- PK Categories Grid -->
                    <div class="grid grid-cols-2 gap-2">
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="1/2 PK">
                            <span class="font-semibold text-sm">1/2 PK</span>
                        </button>
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="3/4 PK">
                            <span class="font-semibold text-sm">3/4 PK</span>
                        </button>
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="1 PK">
                            <span class="font-semibold text-sm">1 PK</span>
                        </button>
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="1.5 PK">
                            <span class="font-semibold text-sm">1.5 PK</span>
                        </button>
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="2 PK">
                            <span class="font-semibold text-sm">2 PK</span>
                        </button>
                        <button class="pk-btn px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-pk="2.5 PK">
                            <span class="font-semibold text-sm">2.5 PK</span>
                        </button>
                    </div>

                    <!-- Inverter / Non Inverter Buttons -->
                    <div class="grid grid-cols-2 gap-2 pt-1">
                        <button id="inverterBtnMobile" class="type-btn inverter px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#3EB48A] hover:shadow-md transition-all duration-200">
                            <span class="font-semibold text-sm">Inverter</span>
                        </button>
                        <button id="nonInverterBtnMobile" class="type-btn non-inverter px-4 py-3 rounded-lg border border-gray-300 bg-white hover:border-[#F99C1C] hover:shadow-md transition-all duration-200">
                            <span class="font-semibold text-sm">Non Inverter</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Desktop Horizontal Scroll -->
            <div class="hidden md:block">
                <div id="pkScrollContainer" class="flex justify-center items-center overflow-x-auto scroll-smooth snap-x snap-mandatory scrollbar-hide cursor-grab">
                    <div class="w-full max-w-[1035px] h-[50px] min-w-[700px] md:min-w-0 snap-center flex flex-nowrap justify-center items-center gap-[10.88px]">
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="1/2 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">1/2 PK</span>
                        </button>
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="3/4 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">3/4 PK</span>
                        </button>
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="1 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">1 PK</span>
                        </button>
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="1.5 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">1.5 PK</span>
                        </button>
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="2 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">2 PK</span>
                        </button>
                        <button class="pk-btn relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#41B8EA] flex items-center justify-center" data-pk="2.5 PK">
                            <span class="font-semibold text-[#373E51] text-[16px]">2.5 PK</span>
                        </button>
                        <button id="inverterBtn" class="type-btn inverter relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#3EB48A] flex items-center justify-center">
                            <span class="font-semibold text-[#41B8EA] text-[16px]">INVERTER</span>
                        </button>
                        <button id="nonInverterBtn" class="type-btn non-inverter relative bg-white border border-[#ced4da] h-[45.862px] overflow-hidden rounded-[100px] w-[134.478px] flex-shrink-0 cursor-pointer transition-all duration-200 hover:shadow-lg hover:scale-105 hover:border-[#F99C1C] flex items-center justify-center">
                            <span class="font-semibold text-[#41B8EA] text-[16px]">NON INVERTER</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Categories -->
    <div class="bg-white py-6 border-b">
        <div class="container mx-auto px-4">
            <!-- Mobile Dropdown -->
            <div class="md:hidden">
                <button id="productCategoriesToggle" class="w-full flex items-center justify-between px-4 py-3 bg-white border border-gray-300 rounded-lg hover:border-[#41B8EA] transition-colors">
                    <span class="font-semibold text-[#373E51]">Kategori Produk</span>
                    <i data-lucide="chevron-down" id="productCategoriesChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                </button>
                <div id="productCategoriesContent" class="dropdown-content mt-3 space-y-2 overflow-hidden">
                    <!-- Wall Mounted Split -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="wall-mounted">
                        <svg class="w-10 h-auto flex-shrink-0 fill-[#222] group-hover:fill-white transition-colors" viewBox="0 0 58.7897 31.2443" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M58.7897 26.9884C58.3228 29.4097 56.8683 30.9353 54.7279 31.1334L16.8184 31.1281C15.3425 30.9336 15.8294 29.1242 16.3607 29.1242H50.8881V27.2543H45.3336C45.1438 27.2543 44.7824 26.4941 44.836 26.1515C44.8896 25.8089 45.4071 25.2522 45.6781 25.2522H50.8881V23.5161H8.05797V25.2522H42.241C43.3816 25.2522 43.2453 27.256 42.5839 27.256H8.05797V29.126H13.6125C13.6554 29.126 13.9998 29.5828 14.0427 29.6952C14.2938 30.3679 13.8131 30.9692 13.2634 31.1209C9.46497 30.4536 0.773395 33.4887 0.171706 26.7707C0.511591 19.5834 -0.328936 11.7216 0.153334 4.61097C0.291125 2.56255 1.64148 0.503418 3.44808 0.175099C4.98216 -0.105042 8.87859 0.00380257 10.5244 0.137628C10.9516 0.171531 11.3542 0.180452 11.4645 0.778206C11.6436 1.75602 11.1384 2.07185 10.4096 2.15215C8.43919 2.36627 5.46749 1.75246 3.67467 2.17713C2.94897 2.34843 2.07476 3.42617 1.92472 4.27551L1.87266 26.5227C1.99055 27.372 2.29982 28.1536 2.93978 28.6175C3.10819 28.7406 3.84921 29.126 3.99159 29.126H6.33864V22.2474C6.33864 21.9423 6.99391 21.3856 7.30624 21.5069H51.6353C51.9476 21.3856 52.6029 21.9423 52.6029 22.2474V29.126H54.9499C55.8486 29.126 57.0949 27.6254 57.0689 26.5227V4.61632C56.9586 3.47256 56.2299 2.62143 55.3541 2.20925L14.179 2.15036C13.0766 2.07721 12.8332 0.451672 13.9463 0.135844L55.2944 0.141197C56.9234 0.34818 58.5692 2.2717 58.7867 4.14883V26.9884H58.7897Z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Wall Mounted Split</div>
                            <p class="text-xs opacity-75 mt-0.5">88 Items Available</p>
                        </div>
                    </button>

                    <!-- Cassette -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="cassette">
                        <svg class="w-8 h-auto flex-shrink-0 fill-[#222] group-hover:fill-white transition-colors" viewBox="0 0 39.6498 46.4001" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M35.4659 46.4001H13.3963C12.8406 46.2299 12.9095 45.0405 13.3575 45.0405H30.1997V41.824C30.1997 41.0057 29.2706 39.8605 28.5335 39.8764L11.0425 39.8855C8.9089 40.3906 9.53542 43.1564 9.44619 45.0405H11.188C11.2074 45.0405 11.4208 45.306 11.4489 45.3685C11.6594 45.8395 11.477 46.1232 11.1492 46.399H4.18193C3.92492 46.2628 3.62718 46.2548 3.3469 46.1527C1.56628 45.5001 0.302588 43.6365 0 41.5062V4.89731C0.359809 2.30508 2.11618 0.256499 4.37589 0.0045398L35.1972 0C37.5588 0.203156 39.4655 2.45603 39.6498 5.21055L39.6459 41.2792C39.4936 43.775 37.5986 46.1334 35.4659 46.4001ZM8.2853 1.36307H4.6843C3.13063 1.36307 1.57016 2.93271 1.25691 4.69188L1.16186 5.48634V9.70041H3.75617C5.30112 9.70041 6.68798 11.2371 6.80533 13.019L6.81794 33.22C6.80048 35.1176 5.39422 36.7951 3.75617 36.7951H1.16186V40.9183C1.16186 42.7365 2.50314 44.5626 4.00639 44.9292L4.68527 45.0405H8.28627V41.6424C8.28627 40.3043 9.65665 38.6371 10.8117 38.5258L28.6169 38.5122C29.8632 38.4668 31.3625 40.2339 31.3625 41.6424V45.0405H34.9635C36.5172 45.0405 38.0777 43.4708 38.3909 41.7116L38.486 40.9172V36.7939H35.8916C34.2536 36.7939 32.8473 35.1165 32.8299 33.2188L32.8425 13.0179C32.9598 11.236 34.3477 9.69927 35.8916 9.69927H38.486V5.48521C38.486 3.66702 37.1447 1.84089 35.6414 1.4743L34.9625 1.36307H31.3615V4.85191C31.3615 6.18888 29.9902 7.86066 28.8351 7.96734C23.2227 7.86066 17.2369 8.45537 11.6497 8.07289C10.4713 7.99231 9.41225 7.60983 8.76343 6.37614C8.60244 6.06971 8.2853 5.17991 8.2853 4.85191V1.36307ZM30.1997 1.36307H9.44716V4.57952C9.44716 5.48748 10.3113 6.59632 11.1133 6.61789L28.3842 6.62243C29.2463 6.70187 30.2007 5.5499 30.2007 4.57952V1.36307H30.1997ZM1.16186 35.3446H4.14313C4.89088 35.3446 5.69487 33.9656 5.6522 33.1235L5.65705 13.5468C5.7647 12.6638 4.92579 11.1497 4.14313 11.1497H1.16186V35.3446ZM38.485 11.1497H35.5037C34.722 11.1497 33.8822 12.6638 33.9898 13.5468L33.9947 33.1235C33.952 33.9668 34.755 35.3446 35.5037 35.3446H38.485V11.1497Z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Cassette</div>
                            <p class="text-xs opacity-75 mt-0.5">64 Items Available</p>
                        </div>
                    </button>

                    <!-- Floor Standing -->
                    <!-- Floor Standing -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="floor-standing">
                        <svg class="w-5 h-auto flex-shrink-0 transition-colors" viewBox="0 0 38.8316 57.9169" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_floor_standing_mobile)">
                                <path d="M0.0127484 32.2289C0.216722 32.2034 0.624671 32.6368 0.624671 32.6878V57.2922H38.0794L38.5384 9.779C38.1177 9.07784 37.8882 9.62602 37.7735 9.62602H0.624671C0.31871 12.4944 0.956129 15.8217 0.624671 18.6519C0.573677 19.1108 0.560929 19.5953 0 19.71V7.02535L0.458942 6.56641H38.3726L38.8316 7.02535V57.4579L38.3726 57.9169H0.47169L0.0127484 57.4579V32.2416V32.2289ZM38.5384 9.00135L37.9392 6.99985C37.289 6.55366 36.7791 7.17833 36.5496 7.17833H0.777651L0.331458 7.67552L0.624671 9.0141H38.5384V9.00135Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M3.07304 51.1849H4.29689V46.1365C4.29689 45.2697 5.52073 44.8235 6.27289 44.747C7.48398 44.6195 11.64 44.3773 11.64 46.1365V50.573C11.1045 50.6367 11.3467 49.8846 11.334 49.5021C11.2957 48.342 11.6655 45.8178 10.4161 45.2187C9.42174 44.747 4.60285 44.696 4.60285 46.4425V51.1849H35.7854V10.5303H36.3973V55.6086C36.3973 55.6086 35.9894 56.093 35.7854 56.0675V51.4781H3.07304V56.0675C2.38463 55.8891 2.48662 55.2389 2.44837 54.7035C1.28827 40.642 3.36626 26.0069 2.44837 11.8817L3.07304 10.5176V51.1594V51.1849Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M33.0309 1.51706C32.6739 0.254968 30.1752 0.662916 31.2333 1.9505C31.2971 2.02699 33.5408 2.23097 31.2333 2.61342L31.1823 3.952L32.1257 4.27071L31.2078 4.42369V5.95349L30.4557 4.50018L26.4782 4.42369L26.3125 5.95349L25.5603 4.50018L21.4171 4.72965L21.1111 5.95349L20.6649 4.50018L16.5217 4.72965L16.2157 5.95349L15.7696 4.50018C13.9975 5.44356 11.5498 3.27633 11.4733 5.95349L11.3204 4.72965H6.93492L6.57797 5.95349C6.31025 5.95349 6.65446 4.23246 5.5071 4.42369L6.43774 3.952L6.38674 2.61342L5.5071 2.43494L6.38674 1.9505L6.42499 0.752154L4.57647 1.26209L4.46174 5.66028L1.2364 5.94074C1.47862 4.85713 3.78607 5.5328 3.99005 5.32882C4.21952 3.51855 3.14865 0.777651 5.39237 0.152981L31.0421 0C34.4969 0.203974 33.528 2.75365 33.63 5.34157C33.8085 5.52005 35.963 4.95912 36.3837 5.80051L33.0181 5.95349V1.51706H33.0309ZM6.7437 1.976H11.3331V0.752154C10.428 0.905135 7.34287 0.407948 6.88393 1.04537L6.7437 1.976ZM16.2157 1.976C16.9551 0.152981 12.0725 0.611922 11.7666 1.04537L11.6263 1.976H16.2157ZM21.1111 1.976C21.3278 -0.140232 17.9495 1.04537 16.5217 0.752154V1.976H21.1111ZM25.9938 1.976C26.2105 -0.140232 22.8322 1.04537 21.4043 0.752154V1.976H25.9938ZM30.8891 1.976C31.1059 -0.140232 27.7275 1.04537 26.2997 0.752154V1.976H30.8891ZM6.7437 4.11773H11.3331V2.58792L7.18989 2.35845L6.79469 2.77915L6.7437 4.10498V4.11773ZM11.6263 4.11773H16.2157V2.58792L12.0725 2.35845L11.6773 2.77915L11.6263 4.10498V4.11773ZM21.1111 2.58792H16.5217V4.11773H21.1111V2.58792ZM25.9938 2.58792H21.4043V4.11773H25.9938V2.58792ZM30.8891 2.58792H26.2997V4.11773H30.8891V2.58792Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M27.0646 53.9375H33.4898C33.4898 53.9375 34.2037 54.5749 34.2292 54.7406C34.3184 55.0594 33.5663 55.7733 33.4898 55.7733H27.0646C26.3507 55.7733 26.236 54.32 27.0646 53.9375Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M5.36636 53.9375H11.7915C12.378 53.9375 12.6967 55.7733 11.7915 55.7733H5.36636C5.36636 55.7733 4.65245 55.1358 4.62695 54.9701L5.36636 53.9375Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M34.2543 33.4512H4.60156V33.7571H34.2543V33.4512Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M34.5608 50.8782H34.2549V46.4418C34.2549 44.7208 29.4232 44.7335 28.4416 45.218C27.3453 45.7661 27.2433 49.4122 27.8297 50.4193L27.2178 50.5723V46.1358C27.2178 46.0594 27.8169 45.1415 27.9572 45.0395C28.7603 44.4658 34.5481 44.4276 34.5481 45.8299V50.8782H34.5608Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M33.567 46.672C34.8036 47.9214 33.0953 49.9356 31.6292 48.7627C30.1631 47.5899 32.3176 45.4099 33.567 46.672ZM33.261 46.978C32.3431 46.0346 30.5456 47.8066 32.1136 48.597C33.1463 49.1197 34.0642 47.8194 33.261 46.978Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <path d="M0.318602 20.92H0.012641V30.698H0.318602V20.92Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                <g>
                                    <path d="M7.04977 48.7371C7.71268 47.373 6.99877 46.2766 5.59645 46.9778C4.74231 48.2016 5.82592 48.9028 7.04977 48.7371C6.11914 49.5147 4.88254 48.8901 4.92079 47.6917C4.98453 45.0528 9.40822 46.7866 7.04977 48.7371Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                    <path d="M7.04977 48.7371C7.71268 47.373 6.99877 46.2766 5.59645 46.9778C4.74231 48.2016 5.82592 48.9028 7.04977 48.7371ZM7.04977 48.7371C6.11914 49.5147 4.88254 48.8901 4.92079 47.6917C4.98453 45.0528 9.40822 46.7866 7.04977 48.7371Z" stroke="#222" stroke-width="0.5" class="stroke-[#222] group-hover:stroke-white transition-colors" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_floor_standing_mobile">
                                    <rect fill="white" height="57.9169" width="38.8316" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Floor Standing</div>
                            <p class="text-xs opacity-75 mt-0.5">24 Items Available</p>
                        </div>
                    </button>

                    <!-- Ceiling Suspended -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="ceiling-suspended">
                        <svg class="w-9 h-auto flex-shrink-0 fill-[#222] group-hover:fill-white transition-colors" viewBox="0 0 54.8963 44.7909" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_131_165_m)">
                                <path d="M0 27.5354V25.2945C0.34616 24.8926 0.587922 24.4007 0.958807 24.0149C7.27485 17.4723 17.3904 9.80129 24.5169 3.92101C25.668 2.97258 28.5115 0.22373 29.6846 0.0372584C30.7478 -0.133138 31.4456 0.316966 32.3989 0.657758C39.4952 3.19763 46.553 7.03637 53.652 9.6952C54.5146 10.1646 54.6108 11.0166 54.6877 12.0036C54.935 15.2154 54.9982 22.6518 54.6795 25.7832C54.5916 26.6416 54.402 27.1142 53.8663 27.709L23.3108 44.7326C21.2586 45.1344 15.4645 43.3533 13.1733 42.6717C8.33805 41.2346 4.6759 40.373 2.1374 34.7917L0 27.5354ZM54.1245 25.4553V11.0584L53.0338 10.0971L30.6818 0.718844C30.278 0.587028 29.9648 0.603103 29.6543 0.972831C28.7367 2.06273 30.0142 7.78226 30.4208 9.37048C31.6626 14.2155 34.1297 18.4111 38.2012 20.4205C41.2479 21.9219 49.3552 25.1273 52.4734 25.7928C52.9377 25.8925 53.9322 26.1851 54.1273 25.4553H54.1245ZM28.701 1.30076L0.802211 25.1113C-0.140112 26.9181 2.03025 33.2646 2.96159 35.1068C3.36269 35.8977 3.78028 36.695 4.38194 37.3091L32.4126 16.0192C30.1956 11.531 28.7862 6.54126 28.701 1.30076ZM53.8525 26.5773C53.2921 26.6095 52.7481 26.5902 52.1987 26.4294C48.9596 25.4874 37.5363 21.34 35.289 19.3467C34.7478 18.8677 33.1654 16.6171 32.7176 16.6975L5.19789 38.2414C5.33251 38.9262 8.56882 40.5273 9.29411 40.8134C11.4974 41.6783 21.2036 44.4336 23.0333 44.096C31.9593 39.1931 41.0117 34.5152 49.8525 29.4097C51.1822 28.6414 52.9459 27.8987 53.8553 26.5805L53.8525 26.5773Z" />
                                <path d="M16.6737 7.70182C16.6874 8.26445 15.4539 8.0619 15.1709 8.02011C11.8906 7.52499 11.9978 4.30032 9.31092 3.36153C8.63234 3.12362 7.43452 3.61552 7.65705 2.58028C11.9676 2.0916 12.1791 8.27409 16.6764 7.70182H16.6737Z" />
                                <path d="M7.37941 13.7777C7.63765 14.8483 6.2173 14.4368 5.73103 14.2664C3.71451 13.5495 3.20901 10.2926 0.546875 10.4212C0.865562 9.84896 1.10458 10.1222 1.53041 10.1994C4.29419 10.6977 4.24474 14.3918 7.37941 13.7809V13.7777Z" />
                                <path d="M15.3047 4.18548C15.2937 4.86385 14.2333 4.4459 13.9475 4.3173C13.0189 3.89291 12.7964 2.68728 12.0134 2.115C11.3376 1.61989 10.4749 1.7935 10.1123 0.986528C12.5656 0.62323 13.0766 3.97007 15.3047 4.18548Z" />
                                <path d="M34.7175 35.5352C34.6488 36.0271 34.2092 36.1396 33.8933 36.3261C32.1487 37.3581 30.3025 38.3547 28.5278 39.3257C27.0305 40.1423 25.3711 41.1164 23.7832 41.6083L27.7833 39.0974L34.7147 35.5352H34.7175Z" />
                                <path d="M50.5692 10.5832C50.5747 11.2552 49.528 10.7794 49.2532 10.6797C46.2202 9.59301 42.5361 8.02408 39.5663 6.66091C39.2036 6.49372 38.3327 6.26546 38.2695 5.7832L50.5664 10.5832H50.5692Z" />
                                <path d="M27.6071 5.14258C27.7857 7.08124 28.0852 9.02955 28.5659 10.8975C28.8187 11.8748 29.9945 14.5626 30.0275 14.9581C30.0495 15.212 29.989 15.3857 29.8215 15.5496L4.64522 34.753C3.85125 34.3222 1.6644 27.6381 2.44189 26.3907L27.6071 5.14258ZM26.7884 7.38024L3.61498 26.9597C3.06278 28.0754 4.68094 31.6698 4.92544 32.9718L28.6346 14.5851C27.6841 12.3185 27.0632 9.89439 26.7884 7.38345V7.38024Z" />
                                <path d="M10.931 26.8892L6.28809 30.0914L10.7992 26.2559L10.931 26.8892Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_131_165_m">
                                    <rect fill="white" height="44.7909" width="54.8963" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Ceiling Suspended</div>
                            <p class="text-xs opacity-75 mt-0.5">24 Items Available</p>
                        </div>
                    </button>

                    <!-- Ceiling Duct -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="ceiling-duct">
                        <svg class="w-10 h-auto flex-shrink-0 fill-[#222] group-hover:fill-white transition-colors" viewBox="0 0 63.312 40.0537" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_131_220_m)">
                                <path d="M62.1749 27.0031C58.9692 31.4174 54.7471 35.2634 51.4372 39.5866L50.5742 40.0537H1.55796C0.731197 39.7957 0.107146 39.1904 0 38.1568L0.0130312 14.5579C0.0781874 14.0723 0.327229 13.7284 0.579166 13.3625C3.60675 8.9499 8.39646 4.94538 11.5833 0.547988L12.4159 0H61.5784C62.6382 0.271465 63.0465 1.21738 63.1378 2.39934C63.6909 9.5822 62.7121 17.7177 63.132 25C63.0321 26.0842 62.6903 26.2899 62.1734 27.0015L62.1749 27.0031ZM60.8153 2.659H12.9617L3.11591 14.1229L2.90017 14.6304H50.5366V36.7185L52.4985 34.707L60.8167 25V2.659H60.8153ZM49.8111 15.3049H2.39195L2.17477 37.393H49.8111V15.3049Z" />
                                <path d="M47.3496 18.3398V19.8573H31.0606C30.2787 19.8573 29.4259 21.0107 29.0799 21.766C27.8882 24.366 27.868 29.5812 29.5446 31.908C29.6923 32.112 30.3164 32.8404 30.4814 32.8404H47.3496V34.5266H27.2236V18.3398H47.3496Z" />
                                <path d="M24.9072 18.3394C24.8652 18.6732 25.0563 19.9108 24.6958 19.9833C24.509 19.9125 24.3193 19.8518 24.1195 19.8485C19.3978 19.776 13.6699 19.4573 9.04671 19.8485C6.79086 20.039 6.1393 22.2191 5.83379 24.5375C5.49787 27.0886 5.74981 31.4169 7.96222 32.759L24.5452 32.8383L24.8869 33.1148L24.9072 34.5244H4.78115V18.3377H24.9072V18.3394Z" />
                                <path d="M24.9073 20.1953V32.6726C24.5859 32.681 24.3021 32.2561 24.1095 31.9998C22.2866 29.5735 22.275 23.4394 24.0429 20.9574C24.2427 20.6759 24.5642 20.2037 24.9088 20.1953H24.9073Z" />
                                <path d="M42.7166 27.1074L42.8614 28.7935H30.9885L30.8438 27.1074H42.7166Z" />
                                <path d="M42.8614 24.0723L42.7166 25.7584H30.8438L30.9885 24.0723H42.8614Z" />
                                <path d="M21.288 31.6607H9.4875C9.17764 31.1886 8.84752 30.5732 8.83594 29.9746H20.4916L21.288 31.6607Z" />
                                <path d="M43.1502 29.9746L43.7294 31.6607H32.0737C31.6234 31.2358 31.4916 30.5647 31.2773 29.9746H43.1502Z" />
                                <path d="M21.288 21.207L20.4916 22.8931H8.83594C8.84752 22.2946 9.17764 21.6791 9.4875 21.207H21.288Z" />
                                <path d="M43.7294 21.207L43.1502 22.8931H31.2773L31.8565 21.207H43.7294Z" />
                                <path d="M20.2739 24.0723L20.1291 25.7584H8.40102C8.45459 25.2036 8.22148 24.4736 8.6182 24.0723H20.2739Z" />
                                <path d="M20.1291 27.1074L20.2739 28.7935H8.6182C8.22148 28.3922 8.45459 27.6622 8.40102 27.1074H20.1291Z" />
                                <path d="M47.3496 32.6726C46.0045 31.7604 45.421 29.4386 45.3153 27.707C45.1647 25.2149 45.3732 21.6471 47.3496 20.1953V32.6726Z" />
                            </g>
                            <defs>
                                <clipPath id="clip0_131_220_m">
                                    <rect fill="white" height="40.0537" width="63.312" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Ceiling Duct</div>
                            <p class="text-xs opacity-75 mt-0.5">64 Items Available</p>
                        </div>
                    </button>

                    <!-- VRV/VRF -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="vrv-vrf">
                        <svg class="w-5 h-auto flex-shrink-0 transition-colors" viewBox="0 0 38.8316 57.9169" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_vrv_mobile)">
                                <path d="M0.0127484 32.2289C0.216722 32.2034 0.624671 32.6368 0.624671 32.6878V57.2922H38.0794L38.5384 9.779C38.1177 9.07784 37.8882 9.62602 37.7735 9.62602H0.624671C0.31871 12.4944 0.956129 15.8217 0.624671 18.6519C0.573677 19.1108 0.560929 19.5953 0 19.71V7.02535L0.458942 6.56641H38.3726L38.8316 7.02535V57.4579L38.3726 57.9169H0.47169L0.0127484 57.4579V32.2416V32.2289ZM38.5384 9.00135L37.9392 6.99985C37.289 6.55366 36.7791 7.17833 36.5496 7.17833H0.777651L0.331458 7.67552L0.624671 9.0141H38.5384V9.00135Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M3.07304 51.1849H4.29689V46.1365C4.29689 45.2697 5.52073 44.8235 6.27289 44.747C7.48398 44.6195 11.64 44.3773 11.64 46.1365V50.573C11.1045 50.6367 11.3467 49.8846 11.334 49.5021C11.2957 48.342 11.6655 45.8178 10.4161 45.2187C9.42174 44.747 4.60285 44.696 4.60285 46.4425V51.1849H35.7854V10.5303H36.3973V55.6086C36.3973 55.6086 35.9894 56.093 35.7854 56.0675V51.4781H3.07304V56.0675C2.38463 55.8891 2.48662 55.2389 2.44837 54.7035C1.28827 40.642 3.36626 26.0069 2.44837 11.8817L3.07304 10.5176V51.1594V51.1849Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M33.0309 1.51706C32.6739 0.254968 30.1752 0.662916 31.2333 1.9505C31.2971 2.02699 33.5408 2.23097 31.2333 2.61342L31.1823 3.952L32.1257 4.27071L31.2078 4.42369V5.95349L30.4557 4.50018L26.4782 4.42369L26.3125 5.95349L25.5603 4.50018L21.4171 4.72965L21.1111 5.95349L20.6649 4.50018L16.5217 4.72965L16.2157 5.95349L15.7696 4.50018C13.9975 5.44356 11.5498 3.27633 11.4733 5.95349L11.3204 4.72965H6.93492L6.57797 5.95349C6.31025 5.95349 6.65446 4.23246 5.5071 4.42369L6.43774 3.952L6.38674 2.61342L5.5071 2.43494L6.38674 1.9505L6.42499 0.752154L4.57647 1.26209L4.46174 5.66028L1.2364 5.94074C1.47862 4.85713 3.78607 5.5328 3.99005 5.32882C4.21952 3.51855 3.14865 0.777651 5.39237 0.152981L31.0421 0C34.4969 0.203974 33.528 2.75365 33.63 5.34157C33.8085 5.52005 35.963 4.95912 36.3837 5.80051L33.0181 5.95349V1.51706H33.0309ZM6.7437 1.976H11.3331V0.752154C10.428 0.905135 7.34287 0.407948 6.88393 1.04537L6.7437 1.976ZM16.2157 1.976C16.9551 0.152981 12.0725 0.611922 11.7666 1.04537L11.6263 1.976H16.2157ZM21.1111 1.976C21.3278 -0.140232 17.9495 1.04537 16.5217 0.752154V1.976H21.1111ZM25.9938 1.976C26.2105 -0.140232 22.8322 1.04537 21.4043 0.752154V1.976H25.9938ZM30.8891 1.976C31.1059 -0.140232 27.7275 1.04537 26.2997 0.752154V1.976H30.8891ZM6.7437 4.11773H11.3331V2.58792L7.18989 2.35845L6.79469 2.77915L6.7437 4.10498V4.11773ZM11.6263 4.11773H16.2157V2.58792L12.0725 2.35845L11.6773 2.77915L11.6263 4.10498V4.11773ZM21.1111 2.58792H16.5217V4.11773H21.1111V2.58792ZM25.9938 2.58792H21.4043V4.11773H25.9938V2.58792ZM30.8891 2.58792H26.2997V4.11773H30.8891V2.58792Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M27.0646 53.9375H33.4898C33.4898 53.9375 34.2037 54.5749 34.2292 54.7406C34.3184 55.0594 33.5663 55.7733 33.4898 55.7733H27.0646C26.3507 55.7733 26.236 54.32 27.0646 53.9375Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M5.36636 53.9375H11.7915C12.378 53.9375 12.6967 55.7733 11.7915 55.7733H5.36636C5.36636 55.7733 4.65245 55.1358 4.62695 54.9701L5.36636 53.9375Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M34.2543 33.4512H4.60156V33.7571H34.2543V33.4512Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M34.5608 50.8782H34.2549V46.4418C34.2549 44.7208 29.4232 44.7335 28.4416 45.218C27.3453 45.7661 27.2433 49.4122 27.8297 50.4193L27.2178 50.5723V46.1358C27.2178 46.0594 27.8169 45.1415 27.9572 45.0395C28.7603 44.4658 34.5481 44.4276 34.5481 45.8299V50.8782H34.5608Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M33.567 46.672C34.8036 47.9214 33.0953 49.9356 31.6292 48.7627C30.1631 47.5899 32.3176 45.4099 33.567 46.672ZM33.261 46.978C32.3431 46.0346 30.5456 47.8066 32.1136 48.597C33.1463 49.1197 34.0642 47.8194 33.261 46.978Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <path d="M0.318602 20.92H0.012641V30.698H0.318602V20.92Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                <g>
                                    <path d="M7.04977 48.7371C7.71268 47.373 6.99877 46.2766 5.59645 46.9778C4.74231 48.2016 5.82592 48.9028 7.04977 48.7371C6.11914 49.5147 4.88254 48.8901 4.92079 47.6917C4.98453 45.0528 9.40822 46.7866 7.04977 48.7371Z" class="fill-[#222] group-hover:fill-white transition-colors" />
                                    <path d="M7.04977 48.7371C7.71268 47.373 6.99877 46.2766 5.59645 46.9778C4.74231 48.2016 5.82592 48.9028 7.04977 48.7371ZM7.04977 48.7371C6.11914 49.5147 4.88254 48.8901 4.92079 47.6917C4.98453 45.0528 9.40822 46.7866 7.04977 48.7371Z" class="stroke-[#222] group-hover:stroke-white transition-colors" stroke-width="0.5" />
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_vrv_mobile">
                                    <rect fill="white" height="57.9169" width="38.8316" />
                                </clipPath>
                            </defs>
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">VRV/VRF</div>
                            <p class="text-xs opacity-75 mt-0.5">Hubungi Kami</p>
                        </div>
                    </button>

                    <!-- Produk Lainnya -->
                    <button class="category-btn w-full flex items-center gap-3 px-4 py-3 rounded-lg border border-[#ced4da] bg-[#f3f3f3] hover:border-[#41B8EA] hover:shadow-md transition-all duration-200" data-category="produk-lainnya">
                        <svg class="w-4 h-auto flex-shrink-0 fill-[#222] group-hover:fill-white transition-colors" viewBox="0 0 22.1356 50.3887" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.1587 47.7349V50.0912C20.1587 50.1098 20.0144 50.2841 19.9695 50.3082C19.7569 50.4244 17.9297 50.4156 17.7612 50.2654C17.291 49.8446 17.6928 47.7502 17.5785 47.7338L4.51778 47.736C4.5824 48.2807 4.77719 49.9158 4.38573 50.2665C4.21715 50.4167 2.38999 50.4255 2.1774 50.3093C2.13338 50.2852 1.98822 50.1109 1.98822 50.0923V47.736C1.70165 47.7184 0.811949 47.0685 0.769805 46.8055C0.651803 42.7109 0.355862 38.6076 0.205081 34.5339C-0.183576 24.0357 0.117048 13.4859 0.0252685 2.96678L1.7747 0.521678L6.44327 0.505238C6.76169 0.453728 6.77105 0.212615 7.18125 0.163297C8.78177 -0.0284978 13.5159 -0.0789123 15.0593 0.163297C15.3702 0.212615 15.3936 0.45592 15.7046 0.504142C17.0831 0.721144 18.8719 0.327692 20.2973 0.499759C20.6775 0.584148 21.7367 2.3903 22.0842 2.79252C22.1553 3.64957 22.1329 4.51867 22.13 5.37901C22.0888 17.279 22.2097 29.247 21.6618 41.1075C21.5766 42.9586 21.4277 44.8284 21.3752 46.6904C21.3265 47.0038 20.4911 47.8236 20.1596 47.7338L20.1587 47.7349ZM15.1014 1.48503C15.0031 1.25378 14.8242 1.03678 14.591 1.04117C12.3696 1.2483 9.83161 0.786902 7.65045 1.04117C7.3442 1.07733 7.19342 1.13871 7.04733 1.48613H15.1014V1.48503ZM6.86002 1.48503H2.13057L0.91684 3.13337L0.879379 30.2936L5.0338 32.0625L17.424 31.9847L21.127 30.3999L21.2834 30.1446L21.2862 3.3964C21.2179 2.81006 20.3525 1.94534 20.0182 1.48284H15.2887C15.9396 2.28947 16.333 2.58867 16.1297 3.83698C16.0885 4.08796 15.1136 5.2979 14.7793 5.21571L7.01923 5.18612C6.65586 4.7839 6.07802 4.34332 6.01434 3.73177C5.89259 2.54703 6.2672 2.3081 6.85908 1.48284L6.86002 1.48503ZM7.30019 2.49442C6.48916 3.04898 6.86751 3.94219 7.56429 4.33236H14.5845C15.255 4.00905 15.698 2.88678 14.8654 2.47469L7.30112 2.49442H7.30019ZM4.61236 32.9393L0.960856 31.2953L1.52745 46.0295C1.50123 46.2849 1.98167 46.8581 2.13057 46.8581H4.47189L4.61236 46.6937V32.9393ZM17.63 32.9941V46.6937L17.7705 46.8581H20.0182C20.0781 46.8581 20.3806 46.5666 20.4415 46.4767C20.7712 45.9868 20.5941 45.018 20.6232 44.3878C20.7655 41.2961 20.9706 38.1714 21.0989 35.0808C21.1495 33.8599 21.1645 32.6269 21.1879 31.4049L17.63 32.9941ZM16.7872 33.0489H5.45524V46.8581H9.34181L9.48229 46.6937V38.6931C9.48229 38.6482 9.6724 38.1813 9.72017 38.0947C10.3898 36.8914 12.0231 36.9626 12.5485 38.2821C12.5841 38.3731 12.7601 38.9825 12.7601 39.0208V46.857H16.7872V33.0478V33.0489ZM11.9173 46.8581V38.9123C11.9173 38.6383 11.3862 38.2054 11.1193 38.1923C10.8524 38.1791 10.3252 38.4849 10.3252 38.8027V46.8581L10.7054 46.8099L10.7953 39.6828C10.8946 39.0734 11.4481 39.3693 11.4481 39.6795V46.8581H11.9163H11.9173ZM3.76949 48.1732C2.36564 47.9727 2.36939 48.9229 3.76949 48.7223V48.1732ZM18.3783 48.7223L19.2577 48.7048C19.7204 48.0143 18.8119 48.1743 18.3783 48.1732V48.7223Z" />
                        </svg>
                        <div class="flex-1 text-left">
                            <div class="font-semibold text-sm">Produk Lainnya</div>
                            <p class="text-xs opacity-75 mt-0.5">Pipa, ducting, kabel, etc</p>
                        </div>
                    </button>
                </div>
            </div>

            <!-- Desktop Horizontal Scroll -->
            <div class="hidden md:block">
                <div id="productsScrollContainer" class="flex justify-center items-center overflow-x-auto md:overflow-x-visible scroll-smooth snap-x snap-mandatory scrollbar-hide cursor-grab">
                    <div class="w-full max-w-[1151.99px] h-[144px] min-w-[800px] md:min-w-0 snap-center">
                        <!-- Category Buttons - Grid Layout (Group5047 Style) -->
                        <div class="h-full flex items-stretch justify-center">
                            <!-- Wall Mounted Split -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="wall-mounted">
                                <div class="absolute inset-[15.56%_32.15%_62.75%_32.05%]" data-name="Vector">
                                    <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 58.7897 31.2443">
                                        <path d="M58.7897 26.9884C58.3228 29.4097 56.8683 30.9353 54.7279 31.1334L16.8184 31.1281C15.3425 30.9336 15.8294 29.1242 16.3607 29.1242H50.8881V27.2543H45.3336C45.1438 27.2543 44.7824 26.4941 44.836 26.1515C44.8896 25.8089 45.4071 25.2522 45.6781 25.2522H50.8881V23.5161H8.05797V25.2522H42.241C43.3816 25.2522 43.2453 27.256 42.5839 27.256H8.05797V29.126H13.6125C13.6554 29.126 13.9998 29.5828 14.0427 29.6952C14.2938 30.3679 13.8131 30.9692 13.2634 31.1209C9.46497 30.4536 0.773395 33.4887 0.171706 26.7707C0.511591 19.5834 -0.328936 11.7216 0.153334 4.61097C0.291125 2.56255 1.64148 0.503418 3.44808 0.175099C4.98216 -0.105042 8.87859 0.00380257 10.5244 0.137628C10.9516 0.171531 11.3542 0.180452 11.4645 0.778206C11.6436 1.75602 11.1384 2.07185 10.4096 2.15215C8.43919 2.36627 5.46749 1.75246 3.67467 2.17713C2.94897 2.34843 2.07476 3.42617 1.92472 4.27551L1.87266 26.5227C1.99055 27.372 2.29982 28.1536 2.93978 28.6175C3.10819 28.7406 3.84921 29.126 3.99159 29.126H6.33864V22.2474C6.33864 21.9423 6.99391 21.3856 7.30624 21.5069H51.6353C51.9476 21.3856 52.6029 21.9423 52.6029 22.2474V29.126H54.9499C55.8486 29.126 57.0949 27.6254 57.0689 26.5227V4.61632C56.9586 3.47256 56.2299 2.62143 55.3541 2.20925L14.179 2.15036C13.0766 2.07721 12.8332 0.451672 13.9463 0.135844L55.2944 0.141197C56.9234 0.34818 58.5692 2.2717 58.7867 4.14883V26.9884H58.7897Z" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector" />
                                    </svg>
                                </div>
                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Wall Mounted Split</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">88 Items Available</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- Cassette -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="cassette">
                                <div class="absolute inset-[14.44%_37.82%_53.33%_38.03%]" data-name="Vector">
                                    <svg class="block w-full h-full" fill="none" preserveAspectRatio="none" viewBox="0 0 39.6498 46.4001">
                                        <path d="M35.4659 46.4001H13.3963C12.8406 46.2299 12.9095 45.0405 13.3575 45.0405H30.1997V41.824C30.1997 41.0057 29.2706 39.8605 28.5335 39.8764L11.0425 39.8855C8.9089 40.3906 9.53542 43.1564 9.44619 45.0405H11.188C11.2074 45.0405 11.4208 45.306 11.4489 45.3685C11.6594 45.8395 11.477 46.1232 11.1492 46.399H4.18193C3.92492 46.2628 3.62718 46.2548 3.3469 46.1527C1.56628 45.5001 0.302588 43.6365 0 41.5062V4.89731C0.359809 2.30508 2.11618 0.256499 4.37589 0.0045398L35.1972 0C37.5588 0.203156 39.4655 2.45603 39.6498 5.21055L39.6459 41.2792C39.4936 43.775 37.5986 46.1334 35.4659 46.4001ZM8.2853 1.36307H4.6843C3.13063 1.36307 1.57016 2.93271 1.25691 4.69188L1.16186 5.48634V9.70041H3.75617C5.30112 9.70041 6.68798 11.2371 6.80533 13.019L6.81794 33.22C6.80048 35.1176 5.39422 36.7951 3.75617 36.7951H1.16186V40.9183C1.16186 42.7365 2.50314 44.5626 4.00639 44.9292L4.68527 45.0405H8.28627V41.6424C8.28627 40.3043 9.65665 38.6371 10.8117 38.5258L28.6169 38.5122C29.8632 38.4668 31.3625 40.2339 31.3625 41.6424V45.0405H34.9635C36.5172 45.0405 38.0777 43.4708 38.3909 41.7116L38.486 40.9172V36.7939H35.8916C34.2536 36.7939 32.8473 35.1165 32.8299 33.2188L32.8425 13.0179C32.9598 11.236 34.3477 9.69927 35.8916 9.69927H38.486V5.48521C38.486 3.66702 37.1447 1.84089 35.6414 1.4743L34.9625 1.36307H31.3615V4.85191C31.3615 6.18888 29.9902 7.86066 28.8351 7.96734C23.2227 7.86066 17.2369 8.45537 11.6497 8.07289C10.4713 7.99231 9.41225 7.60983 8.76343 6.37614C8.60244 6.06971 8.2853 5.17991 8.2853 4.85191V1.36307ZM30.1997 1.36307H9.44716V4.57952C9.44716 5.48748 10.3113 6.59632 11.1133 6.61789L28.3842 6.62243C29.2463 6.70187 30.2007 5.5499 30.2007 4.57952V1.36307H30.1997ZM1.16186 35.3446H4.14313C4.89088 35.3446 5.69487 33.9656 5.6522 33.1235L5.65705 13.5468C5.7647 12.6638 4.92579 11.1497 4.14313 11.1497H1.16186V35.3446ZM38.485 11.1497H35.5037C34.722 11.1497 33.8822 12.6638 33.9898 13.5468L33.9947 33.1235C33.952 33.9668 34.755 35.3446 35.5037 35.3446H38.485V11.1497Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector" />
                                    </svg>
                                </div>
                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Cassette</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">64 Items Available</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- Floor Standing -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="floor-standing">
                                <div class="absolute inset-[11.67%_38.25%_48.11%_38.25%]" data-name="Vector">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 27.4794 55.2014">
                                            <g clip-path="url(#clip0_133_296)" id="Group 175">
                                                <path d="M0.0800274 7.68966L7.19623 3.14862C7.56623 2.56405 8.05575 0.162813 8.63049 0.0381517C10.0242 0.11198 11.5052 -0.0756164 12.8875 0.0369414C16.5179 0.329834 21.4006 1.24845 25.032 1.99157C25.8894 2.16707 26.1669 2.00973 26.3363 3.13531C26.619 5.01611 26.7385 7.47544 26.8664 9.41676C27.6427 21.1555 27.6864 33.8575 26.9703 45.6023C26.9329 46.2086 26.7229 49.7367 26.5577 49.963L26.0588 50.2293C21.7695 51.4892 17.4585 53.6145 13.1952 54.8562C11.5655 55.3307 10.2903 55.367 8.7126 54.642L0 49.658L0.0800274 7.68966ZM12.317 1.36585H9.30293V53.4692C10.2788 54.0998 11.6144 53.9727 12.6724 53.6653C12.7857 53.5769 12.8127 50.9651 12.8376 50.5657C13.6192 37.6821 13.5309 24.6193 12.9364 11.7187C12.9104 11.156 12.9686 10.5835 12.9395 10.0207L12.317 1.36585ZM25.1962 3.31322L13.4612 1.48809L13.8759 8.02371L25.6213 8.50783L25.1962 3.31322ZM8.15968 52.8036V3.90748L1.19937 8.44973L1.00814 8.71116L0.987352 48.628L1.15468 48.9173L8.15968 52.8024V52.8036ZM25.7241 9.83794L13.9799 9.35382V9.83673C15.5544 9.97834 17.1311 10.0159 18.7077 10.08C20.9028 10.1696 23.3867 10.4504 25.5682 10.0764C25.7491 10.0449 25.7429 10.1393 25.7241 9.83794ZM25.8281 11.2903C21.9452 11.8579 18.0384 11.2806 14.1461 11.1669L14.0838 11.5312C17.9979 11.703 21.9067 12.1121 25.8291 11.7732V11.2903H25.8281ZM25.932 12.9847C24.5684 13.1251 23.1924 13.2401 21.8225 13.2316C19.7647 13.2195 17.6518 12.9557 15.596 12.8576C15.4339 12.8504 14.1856 12.8286 14.1877 12.9242C14.1888 13.1989 14.3696 13.2062 14.5473 13.2316C15.4567 13.3623 16.628 13.2946 17.5655 13.3478C20.169 13.4955 22.7403 13.7109 25.3604 13.4664C25.5319 13.4507 25.693 13.3708 25.8634 13.3478L25.932 12.9835V12.9847ZM26.037 14.6791L19.1203 14.805L14.1877 14.4371V14.799C16.6623 15.0822 19.1349 15.1209 21.623 15.1572C21.8683 15.1608 22.0969 15.2879 22.3422 15.2879L26.037 15.0398V14.6779V14.6791ZM26.037 16.3736C22.1198 16.6846 18.2016 16.3893 14.2917 16.1315V16.4934C18.1984 16.7669 22.1229 17.055 26.037 16.7354V16.3736ZM26.1388 17.9469C25.589 18.051 24.875 18.1696 24.3252 18.1939C21.3403 18.3258 18.3543 17.9869 15.3871 17.8211C15.2447 17.8126 14.2885 17.7908 14.2906 17.8876C14.2906 18.1575 14.4715 18.1733 14.6502 18.1951C16.4534 18.4214 18.6537 18.5085 20.4714 18.5569C22.2892 18.6054 24.2587 18.5533 26.1409 18.4299V17.9457L26.1388 17.9469ZM26.2438 20.0032L25.9933 19.6474C24.61 19.8362 23.2152 19.9016 21.8225 19.8883C19.8686 19.8689 17.8524 19.6353 15.9016 19.5215C15.3975 19.4925 14.8612 19.6256 14.3966 19.3993L14.4974 19.8253C15.5742 19.9512 16.6842 19.9427 17.7723 20.0057C19.9248 20.1291 22.1582 20.376 24.3252 20.2514C24.9311 20.2163 25.6327 20.0807 26.2438 20.0032ZM26.2448 21.3358L19.3282 21.4617L14.3956 21.0937V21.4556C15.7176 21.6565 17.0625 21.6275 18.3959 21.6989C20.7656 21.826 23.2869 22.0704 25.6597 21.8042C25.8499 21.7824 26.0422 21.665 26.2438 21.6965V21.3346L26.2448 21.3358ZM26.2448 23.0302C24.16 23.1561 22.046 23.2251 19.9518 23.1561C18.3377 23.1028 16.5605 22.7797 14.9693 22.7797C14.7583 22.7797 14.5432 22.7313 14.3977 22.9697C14.3956 23.1294 15.41 23.2541 15.5918 23.2711C16.9502 23.3945 18.3876 23.4744 19.7429 23.5204C21.9036 23.593 24.0945 23.5337 26.2438 23.3933V23.0314L26.2448 23.0302ZM26.2428 24.6036C22.364 25.193 18.451 24.5842 14.5608 24.4801L14.4985 24.8444C18.4105 25.0381 22.3225 25.4278 26.2438 25.0865V24.6024L26.2428 24.6036ZM26.3477 26.298C24.8459 26.4747 23.3348 26.5619 21.8225 26.5449C20.566 26.5304 19.244 26.3476 17.9854 26.2932C16.8245 26.2423 15.6604 26.1976 14.4985 26.177C14.5567 32.3023 14.4476 38.4034 14.2958 44.5191L13.8759 53.1679L25.6067 49.0371C26.1264 41.474 26.3405 33.883 26.3467 26.2992L26.3477 26.298Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" id="Vector" />
                                                <path d="M1.78787 33.2213C1.98118 33.1523 2.18281 33.1959 2.3782 33.2128C3.57861 33.3217 5.6375 33.7562 6.8296 34.0806C7.97077 34.3904 7.62883 34.5804 7.63507 35.6721C7.66209 40.2737 7.66105 44.8801 7.63507 49.4816C7.63091 50.2393 7.86891 50.9655 6.78179 50.7186C5.86615 50.5104 3.49339 49.3679 2.52267 48.9007C2.14851 48.7204 1.58416 48.5824 1.45217 48.0898L1.40332 33.9813C1.40852 33.7114 1.5561 33.3048 1.78891 33.2213H1.78787ZM6.60095 35.3756L2.54761 34.5284V47.5996L6.60095 49.173V35.3756Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" id="Vector_2" />
                                                <path d="M5.22855 8.42058C5.68896 8.40364 7.20533 8.2584 7.49218 8.49683C7.88192 8.82119 7.63456 9.33436 7.6356 9.77128C7.63976 14.4588 7.82268 19.3907 7.70524 24.0383C7.69381 24.5006 7.61898 24.917 7.16479 24.9593C5.56424 24.7161 3.79013 24.7451 2.21141 24.451C1.77697 24.3699 1.48908 24.2501 1.41113 23.6885L1.42776 9.1976L1.87571 8.62996C2.99401 8.61907 4.11336 8.46294 5.22958 8.42058H5.22855ZM6.60044 9.71681L2.54711 9.83784V23.1511L6.60044 23.6353V9.71681Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" id="Vector_3" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_133_296">
                                                    <rect fill="white" height="55.2014" width="27.4794" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Floor Standing</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">24 Items Available</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- Ceiling Suspended -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="ceiling-suspended">
                                <div class="absolute inset-[15.56%_33.37%_53.34%_33.2%]" data-name="Vector">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 54.8963 44.7909">
                                            <g clip-path="url(#clip0_131_165)" id="Group 176">
                                                <path d="M0 27.5354V25.2945C0.34616 24.8926 0.587922 24.4007 0.958807 24.0149C7.27485 17.4723 17.3904 9.80129 24.5169 3.92101C25.668 2.97258 28.5115 0.22373 29.6846 0.0372584C30.7478 -0.133138 31.4456 0.316966 32.3989 0.657758C39.4952 3.19763 46.553 7.03637 53.652 9.6952C54.5146 10.1646 54.6108 11.0166 54.6877 12.0036C54.935 15.2154 54.9982 22.6518 54.6795 25.7832C54.5916 26.6416 54.402 27.1142 53.8663 27.709L23.3108 44.7326C21.2586 45.1344 15.4645 43.3533 13.1733 42.6717C8.33805 41.2346 4.6759 40.373 2.1374 34.7917L0 27.5354ZM54.1245 25.4553V11.0584L53.0338 10.0971L30.6818 0.718844C30.278 0.587028 29.9648 0.603103 29.6543 0.972831C28.7367 2.06273 30.0142 7.78226 30.4208 9.37048C31.6626 14.2155 34.1297 18.4111 38.2012 20.4205C41.2479 21.9219 49.3552 25.1273 52.4734 25.7928C52.9377 25.8925 53.9322 26.1851 54.1273 25.4553H54.1245ZM28.701 1.30076L0.802211 25.1113C-0.140112 26.9181 2.03025 33.2646 2.96159 35.1068C3.36269 35.8977 3.78028 36.695 4.38194 37.3091L32.4126 16.0192C30.1956 11.531 28.7862 6.54126 28.701 1.30076ZM53.8525 26.5773C53.2921 26.6095 52.7481 26.5902 52.1987 26.4294C48.9596 25.4874 37.5363 21.34 35.289 19.3467C34.7478 18.8677 33.1654 16.6171 32.7176 16.6975L5.19789 38.2414C5.33251 38.9262 8.56882 40.5273 9.29411 40.8134C11.4974 41.6783 21.2036 44.4336 23.0333 44.096C31.9593 39.1931 41.0117 34.5152 49.8525 29.4097C51.1822 28.6414 52.9459 27.8987 53.8553 26.5805L53.8525 26.5773Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector" />
                                                <path d="M16.6737 7.70182C16.6874 8.26445 15.4539 8.0619 15.1709 8.02011C11.8906 7.52499 11.9978 4.30032 9.31092 3.36153C8.63234 3.12362 7.43452 3.61552 7.65705 2.58028C11.9676 2.0916 12.1791 8.27409 16.6764 7.70182H16.6737Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_2" />
                                                <path d="M7.37941 13.7777C7.63765 14.8483 6.2173 14.4368 5.73103 14.2664C3.71451 13.5495 3.20901 10.2926 0.546875 10.4212C0.865562 9.84896 1.10458 10.1222 1.53041 10.1994C4.29419 10.6977 4.24474 14.3918 7.37941 13.7809V13.7777Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_3" />
                                                <path d="M15.3047 4.18548C15.2937 4.86385 14.2333 4.4459 13.9475 4.3173C13.0189 3.89291 12.7964 2.68728 12.0134 2.115C11.3376 1.61989 10.4749 1.7935 10.1123 0.986528C12.5656 0.62323 13.0766 3.97007 15.3047 4.18548Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_4" />
                                                <path d="M34.7175 35.5352C34.6488 36.0271 34.2092 36.1396 33.8933 36.3261C32.1487 37.3581 30.3025 38.3547 28.5278 39.3257C27.0305 40.1423 25.3711 41.1164 23.7832 41.6083L27.7833 39.0974L34.7147 35.5352H34.7175Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_5" />
                                                <path d="M50.5692 10.5832C50.5747 11.2552 49.528 10.7794 49.2532 10.6797C46.2202 9.59301 42.5361 8.02408 39.5663 6.66091C39.2036 6.49372 38.3327 6.26546 38.2695 5.7832L50.5664 10.5832H50.5692Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_6" />
                                                <path d="M27.6071 5.14258C27.7857 7.08124 28.0852 9.02955 28.5659 10.8975C28.8187 11.8748 29.9945 14.5626 30.0275 14.9581C30.0495 15.212 29.989 15.3857 29.8215 15.5496L4.64522 34.753C3.85125 34.3222 1.6644 27.6381 2.44189 26.3907L27.6071 5.14258ZM26.7884 7.38024L3.61498 26.9597C3.06278 28.0754 4.68094 31.6698 4.92544 32.9718L28.6346 14.5851C27.6841 12.3185 27.0632 9.89439 26.7884 7.38345V7.38024Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_7" />
                                                <path d="M10.931 26.8892L6.28809 30.0914L10.7992 26.2559L10.931 26.8892Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_8" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_131_165">
                                                    <rect fill="white" height="44.7909" width="54.8963" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Ceiling Suspended</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">24 Items Available</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- Ceiling Duct -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="ceiling-duct">
                                <div class="absolute inset-[19.44%_31%_52.74%_30.63%]" data-name="Vector">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 63.312 40.0537">
                                            <g clip-path="url(#clip0_131_220)" id="Group 177">
                                                <path d="M62.1749 27.0031C58.9692 31.4174 54.7471 35.2634 51.4372 39.5866L50.5742 40.0537H1.55796C0.731197 39.7957 0.107146 39.1904 0 38.1568L0.0130312 14.5579C0.0781874 14.0723 0.327229 13.7284 0.579166 13.3625C3.60675 8.9499 8.39646 4.94538 11.5833 0.547988L12.4159 0H61.5784C62.6382 0.271465 63.0465 1.21738 63.1378 2.39934C63.6909 9.5822 62.7121 17.7177 63.132 25C63.0321 26.0842 62.6903 26.2899 62.1734 27.0015L62.1749 27.0031ZM60.8153 2.659H12.9617L3.11591 14.1229L2.90017 14.6304H50.5366V36.7185L52.4985 34.707L60.8167 25V2.659H60.8153ZM49.8111 15.3049H2.39195L2.17477 37.393H49.8111V15.3049Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector" />
                                                <path d="M47.3496 18.3398V19.8573H31.0606C30.2787 19.8573 29.4259 21.0107 29.0799 21.766C27.8882 24.366 27.868 29.5812 29.5446 31.908C29.6923 32.112 30.3164 32.8404 30.4814 32.8404H47.3496V34.5266H27.2236V18.3398H47.3496Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_2" />
                                                <path d="M24.9072 18.3394C24.8652 18.6732 25.0563 19.9108 24.6958 19.9833C24.509 19.9125 24.3193 19.8518 24.1195 19.8485C19.3978 19.776 13.6699 19.4573 9.04671 19.8485C6.79086 20.039 6.1393 22.2191 5.83379 24.5375C5.49787 27.0886 5.74981 31.4169 7.96222 32.759L24.5452 32.8383L24.8869 33.1148L24.9072 34.5244H4.78115V18.3377H24.9072V18.3394Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_3" />
                                                <path d="M24.9073 20.1953V32.6726C24.5859 32.681 24.3021 32.2561 24.1095 31.9998C22.2866 29.5735 22.275 23.4394 24.0429 20.9574C24.2427 20.6759 24.5642 20.2037 24.9088 20.1953H24.9073Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_4" />
                                                <path d="M42.7166 27.1074L42.8614 28.7935H30.9885L30.8438 27.1074H42.7166Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_5" />
                                                <path d="M42.8614 24.0723L42.7166 25.7584H30.8438L30.9885 24.0723H42.8614Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_6" />
                                                <path d="M21.288 31.6607H9.4875C9.17764 31.1886 8.84752 30.5732 8.83594 29.9746H20.4916L21.288 31.6607Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_7" />
                                                <path d="M43.1502 29.9746L43.7294 31.6607H32.0737C31.6234 31.2358 31.4916 30.5647 31.2773 29.9746H43.1502Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_8" />
                                                <path d="M21.288 21.207L20.4916 22.8931H8.83594C8.84752 22.2946 9.17764 21.6791 9.4875 21.207H21.288Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_9" />
                                                <path d="M43.7294 21.207L43.1502 22.8931H31.2773L31.8565 21.207H43.7294Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_10" />
                                                <path d="M20.2739 24.0723L20.1291 25.7584H8.40102C8.45459 25.2036 8.22148 24.4736 8.6182 24.0723H20.2739Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_11" />
                                                <path d="M20.1291 27.1074L20.2739 28.7935H8.6182C8.22148 28.3922 8.45459 27.6622 8.40102 27.1074H20.1291Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_12" />
                                                <path d="M47.3496 32.6726C46.0045 31.7604 45.421 29.4386 45.3153 27.707C45.1647 25.2149 45.3732 21.6471 47.3496 20.1953V32.6726Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" id="Vector_13" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_131_220">
                                                    <rect fill="white" height="40.0537" width="63.312" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>
                                </div>
                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Ceiling Duct</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">64 Items Available</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- VRV/VRF -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="vrv-vrf">
                                <!-- 1 -->
                                <div class="absolute inset-[17.41%_37.93%_46.93%_38.42%]">
                                    <div class="absolute inset-[-0.49%_-0.64%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 39.3316 51.8505">
                                            <path d="M0.262748 25.9125C0.466722 25.887 0.874671 26.3204 0.874671 26.3714V50.9758H38.3294L38.7884 3.46259C38.3677 2.76143 38.1382 3.30961 38.0235 3.30961H0.874671C0.56871 6.178 1.20613 9.50532 0.874671 12.3355C0.823677 12.7944 0.810929 13.2788 0.25 13.3936V0.708942L0.708942 0.25H38.6226L39.0816 0.708942V51.1415L38.6226 51.6005H0.72169L0.262748 51.1415V25.9252V25.9125ZM38.7884 2.68494L38.1892 0.683445C37.539 0.237251 37.0291 0.861922 36.7996 0.861922H1.02765L0.581458 1.35911L0.874671 2.69769H38.7884V2.68494Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="absolute inset-[20.16%_39.41%_48.21%_39.69%]">
                                    <div class="absolute inset-[-0.52%_-0.73%_-0.71%_-0.73%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 34.8114 46.1103">
                                            <path d="M1.2371 40.9046H2.46095V35.8562C2.46095 34.9893 3.68479 34.5431 4.43695 34.4666C5.64804 34.3392 9.80401 34.0969 9.80401 35.8562V40.2927C9.26858 40.3564 9.5108 39.6043 9.49805 39.2218C9.45981 38.0617 9.82951 35.5375 8.58017 34.9383C7.5858 34.4667 2.76691 34.4157 2.76691 36.1622V40.9046H33.9494V0.25H34.5614V45.3283C34.5614 45.3283 34.1534 45.8127 33.9494 45.7872V41.1978H1.2371V45.7872C0.548689 45.6087 0.650676 44.9586 0.612431 44.4231C-0.547671 30.3617 1.53031 15.7265 0.612431 1.60133L1.2371 0.237251V40.8791V40.9046Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="absolute inset-[12.85%_39.42%_83.01%_39.18%]">
                                    <div class="absolute inset-[-4.2%_-1.13%_-15.66%_-0.91%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 35.8614 7.13566">
                                            <path d="M32.1129 1.7671C31.756 0.505012 29.2573 0.91296 30.3154 2.20055C30.3791 2.27704 32.6228 2.48101 30.3154 2.86346L30.2644 4.20204L31.2078 4.52075L30.2899 4.67373V6.20354L29.5377 4.75022L25.5602 4.67373L25.3945 6.20354L24.6424 4.75022L20.4991 4.97969L20.1932 6.20354L19.747 4.75022L15.6038 4.97969L15.2978 6.20354L14.8516 4.75022C13.0796 5.6936 10.6319 3.52638 10.5554 6.20354L10.4024 4.97969H6.01698L5.66002 6.20354C5.39231 6.20354 5.73651 4.48251 4.58916 4.67373L5.51979 4.20204L5.4688 2.86346L4.58916 2.68498L5.4688 2.20055L5.50704 1.0022L3.65853 1.51213L3.54379 5.91032L0.318453 6.19079C0.560672 5.10718 2.86813 5.78284 3.0721 5.57887C3.30157 3.7686 2.23071 1.0277 4.47442 0.403025L30.1242 0.250044C33.579 0.454018 32.6101 3.00369 32.7121 5.59162C32.8906 5.77009 35.045 5.20916 35.4657 6.05056L32.1002 6.20354V1.7671H32.1129ZM5.82575 2.22604H10.4152V1.0022C9.51003 1.15518 6.42493 0.657992 5.96598 1.29541L5.82575 2.22604ZM15.2978 2.22604C16.0372 0.403025 11.1546 0.861966 10.8486 1.29541L10.7084 2.22604H15.2978ZM20.1932 2.22604C20.4099 0.109812 17.0316 1.29541 15.6038 1.0022V2.22604H20.1932ZM25.0758 2.22604C25.2925 0.109812 21.9142 1.29541 20.4864 1.0022V2.22604H25.0758ZM29.9712 2.22604C30.1879 0.109812 26.8096 1.29541 25.3818 1.0022V2.22604H29.9712ZM5.82575 4.36777H10.4152V2.83797L6.27195 2.60849L5.87675 3.02919L5.82575 4.35502V4.36777ZM10.7084 4.36777H15.2978V2.83797L11.1546 2.60849L10.7594 3.02919L10.7084 4.35502V4.36777ZM20.1932 2.83797H15.6038V4.36777H20.1932V2.83797ZM25.0758 2.83797H20.4864V4.36777H25.0758V2.83797ZM29.9712 2.83797H25.3818V4.36777H29.9712V2.83797Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="absolute inset-[50.31%_40.73%_48.41%_54.55%]">
                                    <div class="absolute inset-[-13.62%_-3.23%_-13.62%_-3.22%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 8.25117 2.33576">
                                            <path d="M0.829228 0.25H7.25441C7.25441 0.25 7.96832 0.887415 7.99382 1.05314C8.08306 1.37185 7.3309 2.08576 7.25441 2.08576H0.829228C0.115319 2.08576 0.000583273 0.632451 0.829228 0.25Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="absolute inset-[50.31%_54.05%_48.41%_41.24%]">
                                    <div class="absolute inset-[-13.62%_-3.23%_-13.62%_-3.4%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 8.24275 2.33576">
                                            <path d="M1.00199 0.25H7.42718C8.0136 0.25 8.33231 2.08576 7.42718 2.08576H1.00199C1.00199 2.08576 0.288084 1.44834 0.262587 1.28262L1.00199 0.25Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 6 -->
                                <div class="absolute inset-[27.38%_38.42%_65.83%_61.37%]">
                                    <div class="absolute inset-[-81.71%_-0.84%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 30.1527 0.805961">
                                            <path d="M29.9027 0.25H0.25V0.555961H29.9027V0.25Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 7 -->
                                <div class="absolute inset-[43.87%_40.53%_51.81%_55%]">
                                    <div class="absolute inset-[-4.02%_-3.23%_-4.02%_-3.4%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 7.83032 6.71223">
                                            <path d="M7.59307 6.46223H7.28711V2.0258C7.28711 0.304766 2.45547 0.317515 1.47384 0.801954C0.377483 1.35013 0.275496 4.99617 0.861922 6.00329L0.25 6.15627V1.71983C0.25 1.64334 0.849174 0.725464 0.989406 0.623477C1.79255 0.0498001 7.58032 0.0115535 7.58032 1.41388V6.46223H7.59307Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 8 -->
                                <div class="absolute inset-[45%_40.88%_53.04%_57.38%]">
                                    <div class="absolute inset-[-8.85%_-8.76%_-8.85%_-8.75%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 3.35593 3.32558">
                                            <path d="M2.68029 0.630965C3.91688 1.88031 2.2086 3.89455 0.742538 2.7217C-0.723526 1.54885 1.43095 -0.631124 2.68029 0.630965ZM2.37433 0.936924C1.45645 -0.0064563 -0.341073 1.76557 1.22698 2.55597C2.2596 3.07865 3.17748 1.77832 2.37433 0.936924Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 9 -->
                                <div class="absolute inset-[27.38%_61.38%_65.83%_38.43%]">
                                    <div class="absolute inset-[-2.56%_-81.71%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 0.805961 10.278">
                                            <path d="M0.555961 0.25H0.25V10.028H0.555961V0.25Z" fill="#222" stroke="#222" stroke-width="0.5" class="fill-[#222] stroke-[#222] group-hover:fill-white group-hover:stroke-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 10 -->
                                <div class="absolute inset-[45.04%_56.86%_53.06%_41.42%]">
                                    <div class="absolute inset-[-9.15%_-8.87%_-9.15%_-8.86%]">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 3.32187 3.2332">
                                            <g>
                                                <path d="M2.37984 2.63944C3.04276 1.27536 2.32885 0.179 0.926528 0.880161C0.0723864 2.10401 1.156 2.80517 2.37984 2.63944C1.44921 3.41709 0.212618 2.79242 0.250863 1.59407C0.314605 -1.04484 4.73829 0.688937 2.37984 2.63944Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                                <path d="M2.37984 2.63944C3.04276 1.27536 2.32885 0.179 0.926528 0.880161C0.0723864 2.10401 1.156 2.80517 2.37984 2.63944ZM2.37984 2.63944C1.44921 3.41709 0.212618 2.79242 0.250863 1.59407C0.314605 -1.04484 4.73829 0.688937 2.37984 2.63944Z" stroke="#222" stroke-width="0.5" class="stroke-[#222] group-hover:stroke-white transition-colors" />
                                            </g>
                                        </svg>
                                    </div>
                                </div>

                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">VRV/VRF</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">Hubungi Kami</p>
                                </div>
                                <div class="absolute right-0 top-1/2 -translate-y-1/2 h-[100px] w-px bg-[#ededed]"></div>
                            </button>
                            <!-- Produk Lainnya -->
                            <button class="category-btn relative flex-1 flex flex-col items-center justify-center bg-[#f3f3f3] hover:bg-[#41B8EA] transition-all duration-200 group px-4" data-category="produk-lainnya">
                                <!-- 1 -->
                                <div class="absolute inset-[15%_43.46%_50.01%_43.06%]">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 22.1356 50.3887">
                                            <path d="M20.1587 47.7349V50.0912C20.1587 50.1098 20.0144 50.2841 19.9695 50.3082C19.7569 50.4244 17.9297 50.4156 17.7612 50.2654C17.291 49.8446 17.6928 47.7502 17.5785 47.7338L4.51778 47.736C4.5824 48.2807 4.77719 49.9158 4.38573 50.2665C4.21715 50.4167 2.38999 50.4255 2.1774 50.3093C2.13338 50.2852 1.98822 50.1109 1.98822 50.0923V47.736C1.70165 47.7184 0.811949 47.0685 0.769805 46.8055C0.651803 42.7109 0.355862 38.6076 0.205081 34.5339C-0.183576 24.0357 0.117048 13.4859 0.0252685 2.96678L1.7747 0.521678L6.44327 0.505238C6.76169 0.453728 6.77105 0.212615 7.18125 0.163297C8.78177 -0.0284978 13.5159 -0.0789123 15.0593 0.163297C15.3702 0.212615 15.3936 0.45592 15.7046 0.504142C17.0831 0.721144 18.8719 0.327692 20.2973 0.499759C20.6775 0.584148 21.7367 2.3903 22.0842 2.79252C22.1553 3.64957 22.1329 4.51867 22.13 5.37901C22.0888 17.279 22.2097 29.247 21.6618 41.1075C21.5766 42.9586 21.4277 44.8284 21.3752 46.6904C21.3265 47.0038 20.4911 47.8236 20.1596 47.7338L20.1587 47.7349ZM15.1014 1.48503C15.0031 1.25378 14.8242 1.03678 14.591 1.04117C12.3696 1.2483 9.83161 0.786902 7.65045 1.04117C7.3442 1.07733 7.19342 1.13871 7.04733 1.48613H15.1014V1.48503ZM6.86002 1.48503H2.13057L0.91684 3.13337L0.879379 30.2936L5.0338 32.0625L17.424 31.9847L21.127 30.3999L21.2834 30.1446L21.2862 3.3964C21.2179 2.81006 20.3525 1.94534 20.0182 1.48284H15.2887C15.9396 2.28947 16.333 2.58867 16.1297 3.83698C16.0885 4.08796 15.1136 5.2979 14.7793 5.21571L7.01923 5.18612C6.65586 4.7839 6.07802 4.34332 6.01434 3.73177C5.89259 2.54703 6.2672 2.3081 6.85908 1.48284L6.86002 1.48503ZM7.30019 2.49442C6.48916 3.04898 6.86751 3.94219 7.56429 4.33236H14.5845C15.255 4.00905 15.698 2.88678 14.8654 2.47469L7.30112 2.49442H7.30019ZM4.61236 32.9393L0.960856 31.2953L1.52745 46.0295C1.50123 46.2849 1.98167 46.8581 2.13057 46.8581H4.47189L4.61236 46.6937V32.9393ZM17.63 32.9941V46.6937L17.7705 46.8581H20.0182C20.0781 46.8581 20.3806 46.5666 20.4415 46.4767C20.7712 45.9868 20.5941 45.018 20.6232 44.3878C20.7655 41.2961 20.9706 38.1714 21.0989 35.0808C21.1495 33.8599 21.1645 32.6269 21.1879 31.4049L17.63 32.9941ZM16.7872 33.0489H5.45524V46.8581H9.34181L9.48229 46.6937V38.6931C9.48229 38.6482 9.6724 38.1813 9.72017 38.0947C10.3898 36.8914 12.0231 36.9626 12.5485 38.2821C12.5841 38.3731 12.7601 38.9825 12.7601 39.0208V46.857H16.7872V33.0478V33.0489ZM11.9173 46.8581V38.9123C11.9173 38.6383 11.3862 38.2054 11.1193 38.1923C10.8524 38.1791 10.3252 38.4849 10.3252 38.8027V46.8581L10.7054 46.8099L10.7953 39.6828C10.8946 39.0734 11.4481 39.3693 11.4481 39.6795V46.8581H11.9163H11.9173ZM3.76949 48.1732C2.36564 47.9727 2.36939 48.9229 3.76949 48.7223V48.1732ZM18.3783 48.7223L19.2577 48.7048C19.7204 48.0143 18.8119 48.1743 18.3783 48.1732V48.7223Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="absolute inset-[18.9%_44.61%_64.08%_44.16%]">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 18.4392 24.5109">
                                            <path d="M0 23.1451L0.0796046 1.73323C0.995525 1.44718 2.2411 0.24052 3.11956 0.139691C6.98272 -0.305272 11.4659 0.486016 15.3955 0.141883L18.4392 1.73104L18.4373 22.9972C18.309 23.1671 15.7823 24.3387 15.491 24.3715C11.5286 24.8154 6.96212 24.0263 2.936 24.366L0 23.144V23.1451ZM17.7808 2.6648C17.8211 2.43793 17.6853 2.41163 17.5654 2.31628C17.2723 2.08174 15.521 1.16223 15.211 1.12606C11.4368 0.690962 7.05577 1.46472 3.21696 1.12935C2.9257 1.171 1.24839 2.09161 0.953381 2.31628C0.85411 2.3919 0.714568 2.43245 0.737044 2.6111L2.56046 3.21936C6.86847 2.85988 11.7169 3.68186 15.9612 3.21936C16.5512 3.1547 17.1993 2.80947 17.7827 2.6659L17.7808 2.6648ZM17.7808 3.87146C17.1487 3.88242 16.5849 4.25176 15.9584 4.31423C11.7094 4.73837 6.95463 3.98434 2.65224 4.31423L0.736108 3.87036C0.796982 4.25614 0.580645 5.19539 0.894381 5.38389C1.08918 5.50116 2.29448 5.82009 2.55858 5.84749C6.87409 5.46828 11.8039 6.34067 16.0473 5.84201C16.2496 5.8179 17.6891 5.38499 17.7396 5.3017L17.7808 3.87036V3.87146ZM17.7808 6.50178C17.1899 6.51055 16.6299 6.88208 16.053 6.94455C11.7496 7.41253 6.83382 6.58069 2.46493 6.94455L0.737044 6.50178C0.797919 6.88756 0.581582 7.82681 0.894381 8.01531C1.08918 8.13258 2.29448 8.45151 2.55858 8.47891C6.87409 8.0997 11.8039 8.97209 16.0473 8.47343C16.2496 8.44931 17.6891 8.01641 17.7396 7.93311L17.7808 6.50178ZM17.7808 9.1321L15.9593 9.57487C11.6213 9.2132 6.73923 10.0396 2.46493 9.57487C1.88803 9.5124 1.32799 9.14087 0.737044 9.1321C0.797919 9.51788 0.580645 10.456 0.895317 10.6456C1.13694 10.7914 2.25328 11.0785 2.55952 11.1092C6.88626 10.741 11.789 11.5882 16.0483 11.1048C16.2581 11.0807 17.6834 10.6588 17.7406 10.5645L17.7818 9.1332L17.7808 9.1321ZM17.7808 11.7624C17.1796 11.7876 16.6495 12.1438 16.052 12.2052C11.7506 12.6436 6.91623 11.8654 2.55858 12.2052L0.737044 11.7624C0.797919 12.1482 0.580645 13.0864 0.895317 13.276C1.23247 13.4798 1.98262 13.5478 2.37503 13.7363H16.1438L17.7406 13.1938L17.7818 11.7624H17.7808ZM17.7808 14.3927C17.1871 14.4464 16.6476 14.7763 16.052 14.8355C11.7431 15.2662 6.92185 14.5012 2.55858 14.8355L0.737044 14.3927C0.778252 14.7796 0.677107 15.2903 0.735171 15.6542C0.803538 16.0816 2.02383 16.1825 2.37409 16.3666H16.1429L17.7378 15.8219L17.7799 14.3927H17.7808ZM17.7808 17.0231C17.1871 17.0768 16.6476 17.4067 16.052 17.4658C11.7431 17.8966 6.92185 17.1316 2.55858 17.4658L0.737044 17.0231C0.796982 17.4209 0.583454 18.3262 0.891571 18.541C1.08262 18.6736 2.19709 18.9728 2.46587 19.0002C6.84131 18.6155 11.8395 19.501 16.1419 18.9947C16.3555 18.9695 17.6741 18.5662 17.7387 18.4522L17.7818 17.0231H17.7808ZM17.7808 19.6534C17.2274 19.7016 16.6926 20.037 16.1466 20.0962C11.7843 20.5707 6.8001 19.7268 2.37128 20.0962L0.737044 19.6534C0.796982 20.0501 0.582518 20.9554 0.891571 21.1702C1.08262 21.3028 2.19709 21.602 2.46587 21.6294C6.84131 21.2447 11.8395 22.1303 16.1419 21.6239C16.3555 21.5987 17.6741 21.1954 17.7387 21.0814L17.7808 19.6523V19.6534ZM17.4999 22.3944L16.1457 22.7265C11.7178 22.3593 6.73361 23.2021 2.37128 22.7265C1.81405 22.6662 1.29709 22.3319 0.736108 22.2848C0.759521 22.4481 0.907492 22.4963 1.01707 22.5577C1.47315 22.8131 2.63912 23.3326 3.1205 23.3841C7.04266 23.8049 11.5089 23.0575 15.4892 23.3819L17.4999 22.3933V22.3944Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="absolute inset-[16.8%_49.85%_82.22%_49.46%]">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 1.14161 1.41309">
                                            <path d="M0.535675 0C0.782918 0.112885 1.14161 0.504145 1.14161 0.814304C1.14161 2.03083 -0.956207 1.20776 0.535675 0Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 4 -->
                                <div class="absolute inset-[16.79%_51.04%_82.2%_48.31%]">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 1.07105 1.45557">
                                            <path d="M0.67641 0L0.678283 1.09487L0.816888 0.219193C1.14467 0.439483 1.17277 1.27023 0.799095 1.40174C-0.235764 1.7656 -0.253559 0.172067 0.67641 0Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>
                                <!-- 5 -->
                                <div class="absolute inset-[16.79%_48.7%_82.2%_50.64%]">
                                    <div class="absolute inset-0">
                                        <svg class="block size-full" fill="none" preserveAspectRatio="none" viewBox="0 0 1.07105 1.45557">
                                            <path d="M0.67641 0L0.678282 1.09487L0.816889 0.219193C1.14467 0.439483 1.17277 1.27023 0.799095 1.40174C-0.235765 1.7656 -0.253558 0.172067 0.67641 0Z" fill="#222" class="fill-[#222] group-hover:fill-white transition-colors" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="text-center mt-12">
                                    <div class="font-semibold text-sm text-[#222] group-hover:text-white transition-colors">Produk Lainnya</div>
                                    <p class="text-xs text-[#555] group-hover:text-white/90 mt-1 transition-colors">Pipa, ducting, kabel, etc</p>
                                </div>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="flex flex-col lg:flex-row gap-6">
            
            <!-- Sidebar -->
            <aside class="w-full lg:w-64 flex-shrink-0">
                
                <!-- PK Calculator -->
                <div class="bg-white rounded-lg p-4 shadow mb-6">
                    <h3 class="font-bold mb-4 text-[#373E51]">PK Calculator</h3>
                    <div class="space-y-3">
                        <div>
                            <select id="roomCondition" class="w-full border rounded p-2 text-sm">
                                <option value="">Pilih Kondisi Ruangan</option>
                                <option value="terkena-matahari">Ruangan: Terkena Sinar Matahari</option>
                                <option value="tidak-terkena-matahari">Ruangan: Tidak Terkena Sinar Matahari</option>
                            </select>
                        </div>
                        <div class="bg-gray-100 rounded-lg p-3 text-center">
                            <div class="text-3xl font-bold text-[#41B8EA]"><span id="m2Display">0</span> m²</div>
                        </div>
                        
                        <!-- Custom Slider -->
                        <div class="relative w-full h-[50px] mt-0 mb-3">
                            <!-- Background Track -->
                            <div class="absolute bg-[#f3f3f3] h-[11px] left-0 rounded-full top-[5px] w-full"></div>
                            
                            <!-- Slider Handle -->
                            <div id="sliderHandle" class="absolute w-[20px] h-[20px] top-0 transition-all duration-150" style="left: 0px;">
                                <div class="absolute inset-[-35%]">
                                    <svg class="block w-full h-full" fill="none" preserveAspectRatio="none" viewBox="0 0 34 34">
                                        <g filter="url(#filter0_d_91_212)">
                                            <circle cx="17" cy="17" fill="#41B8EA" r="10" />
                                            <circle cx="17" cy="17" r="11.5" stroke="white" stroke-width="3" />
                                        </g>
                                        <defs>
                                            <filter color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse" height="34" id="filter0_d_91_212" width="34" x="0" y="0">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                <feColorMatrix in="SourceAlpha" result="hardAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                                <feOffset />
                                                <feGaussianBlur stdDeviation="2" />
                                                <feComposite in2="hardAlpha" operator="out" />
                                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                                <feBlend in2="BackgroundImageFix" mode="normal" result="effect1_dropShadow_91_212" />
                                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_91_212" mode="normal" result="shape" />
                                            </filter>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            
                            <!-- Labels -->
                            <p class="absolute font-normal left-0 text-[13px] text-black whitespace-nowrap top-[28px]">0 m²</p>
                            <p class="absolute font-normal right-0 text-[13px] text-black whitespace-nowrap top-[28px]">250 m²</p>
                            
                            <!-- Invisible Range Input -->
                            <input type="range" id="m2Slider" min="0" max="250" value="0" class="w-full h-[20px]">
                        </div>
                        
                        <div class="text-xs text-gray-600 leading-relaxed">Geser kiri atau kanan slider dibawah ini sesuai ukuran ruangan anda dan klik tombol "Mulai Hitung" dibawah ini</div>
                        
                        <button id="calculateBtn" class="w-full bg-[#F99C1C] hover:bg-[#F99C1C]/90 text-white py-2 rounded-lg font-semibold transition-colors">
                            Mulai Hitung
                        </button>
                    </div>
                </div>

                <!-- Calculation Result -->
                <div id="calculationResult" class="hidden mb-6">
                    <div class="bg-[#f3f3f3] rounded-lg p-5 relative">
                        <div class="mb-4">
                            <p class="font-semibold text-sm mb-3">Hasil PK Calculator</p>
                            
                            <p class="text-base leading-relaxed mb-1">
                                <span class="font-semibold text-[#222]">Daya:</span>
                                <span class="font-semibold text-[#41B8EA]" id="btuResult">-</span>
                                <span class="text-[#222]">Btu/h</span>
                            </p>
                            
                            <p class="text-base leading-relaxed">
                                <span class="font-semibold text-[#222]">Kebutuhan:</span>
                                <span class="font-semibold text-[#41B8EA]" id="pkResult">-</span>
                                <span class="text-[#222]">PK</span>
                            </p>
                        </div>

                        <div class="text-xs text-[#626060] space-y-2">
                            <p>
                                <span class="font-semibold">Catatan Penting</span><br>
                                Hitungan diatas dengan asumsi tinggi plafon 2.8m dan kondisi ruangan tertutup.
                            </p>
                            
                            <p>
                                <span class="font-semibold">Kapan Menggunakan Nilai Minimum ?</span><br>
                                Untuk kebutuhan ruangan tertutup biasa pada umumnya cukup menggunakan nilai minimum namun perlu berhati-hati jika cuaca Jabodetabek mengalami cuaca ekstrem panas
                            </p>
                            
                            <p>
                                <span class="font-semibold">Kapan Menggunakan Nilai Maksimum ?</span><br>
                                Merupakan nilai yang direkomendasikan terutama Apabila ruangan menghadap matahari, Terdapat kaca sehingga terkena panas sinar matahari atau ruangan tersebut padat orang
                            </p>
                            
                            <p>
                                <span class="font-semibold">Tips & Trick</span><br>
                                Untuk kebutuhan ruangan High Plafon &gt; 2.8m silahkan nyalakan fitur advanced mode
                            </p>
                        </div>
                        
                        <button class="w-full bg-[#3EB48A] hover:bg-[#3EB48A]/90 text-white py-2 rounded-lg font-semibold transition-colors mt-3 text-sm">
                            Lihat Rekomendasi
                        </button>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="bg-white rounded-lg p-4 shadow">
                    <h3 class="font-bold mb-4 text-[#373E51]">Filter</h3>
                    
                    <!-- Brands Filter -->
                    <div class="mb-6">
                        <button id="brandsFilterToggle" class="w-full flex items-center justify-between mb-3 hover:text-[#41B8EA] transition-colors">
                            <h4 class="font-semibold text-[#373E51]">Brands</h4>
                            <i data-lucide="chevron-down" id="brandsFilterChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                        </button>
                        <div id="brandsFilterContent" class="dropdown-content open space-y-2">
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Panasonic">
                                <span class="text-sm">Panasonic</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Daikin">
                                <span class="text-sm">Daikin</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="LG">
                                <span class="text-sm">LG</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Samsung">
                                <span class="text-sm">Samsung</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Gree">
                                <span class="text-sm">Gree</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="FLiFE">
                                <span class="text-sm">FLiFE</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Polytron">
                                <span class="text-sm">Polytron</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Changhong">
                                <span class="text-sm">Changhong</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Sharp">
                                <span class="text-sm">Sharp</span>
                            </button>
                            <button class="brand-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-brand="Midea">
                                <span class="text-sm">Midea</span>
                            </button>
                        </div>
                    </div>

                    <!-- PK Capacity Filter -->
                    <div class="mb-6">
                        <button id="pkFilterToggle" class="w-full flex items-center justify-between mb-3 hover:text-[#41B8EA] transition-colors">
                            <h4 class="font-semibold text-[#373E51]">Kapasitas PK</h4>
                            <i data-lucide="chevron-down" id="pkFilterChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                        </button>
                        <div id="pkFilterContent" class="dropdown-content open space-y-2">
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="1/2 PK">
                                <span class="text-sm">1/2 PK</span>
                            </button>
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="3/4 PK">
                                <span class="text-sm">3/4 PK</span>
                            </button>
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="1 PK">
                                <span class="text-sm">1 PK</span>
                            </button>
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="1.5 PK">
                                <span class="text-sm">1.5 PK</span>
                            </button>
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="2 PK">
                                <span class="text-sm">2 PK</span>
                            </button>
                            <button class="pk-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-pk="2.5 PK">
                                <span class="text-sm">2.5 PK</span>
                            </button>
                        </div>
                    </div>

                    <!-- Type Filter -->
                    <div class="mb-6">
                        <button id="typeFilterToggle" class="w-full flex items-center justify-between mb-3 hover:text-[#41B8EA] transition-colors">
                            <h4 class="font-semibold text-[#373E51]">Tipe AC</h4>
                            <i data-lucide="chevron-down" id="typeFilterChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                        </button>
                        <div id="typeFilterContent" class="dropdown-content open space-y-2">
                            <button id="inverterFilterBtn" class="type-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-type="Inverter">
                                <span class="text-sm">Inverter</span>
                            </button>
                            <button id="nonInverterFilterBtn" class="type-filter-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-type="Non Inverter">
                                <span class="text-sm">Non Inverter</span>
                            </button>
                        </div>
                    </div>

                    <!-- Produk Lainnya Filter -->
                    <div>
                        <button id="otherProductsToggle" class="w-full flex items-center justify-between mb-3 hover:text-[#41B8EA] transition-colors">
                            <h4 class="font-semibold text-[#373E51]">Produk Lainnya</h4>
                            <i data-lucide="chevron-down" id="otherProductsChevron" class="h-5 w-5 text-[#41B8EA] transition-transform duration-200"></i>
                        </button>
                        <div id="otherProductsContent" class="dropdown-content open space-y-2">
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Air Purifier">
                                <span class="text-sm">Air Purifier</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Kipas Angin">
                                <span class="text-sm">Kipas Angin</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Kabel Power">
                                <span class="text-sm">Kabel Power</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Pipa AC">
                                <span class="text-sm">Pipa AC</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Panel">
                                <span class="text-sm">Panel</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Ducting">
                                <span class="text-sm">Ducting</span>
                            </button>
                            <button class="other-product-btn w-full text-left px-3 py-2 rounded border border-gray-300 bg-white hover:border-[#41B8EA] hover:bg-gray-50 transition-all" data-product="Freon">
                                <span class="text-sm">Freon</span>
                            </button>
                        </div>
                    </div>
                </div>

            </aside>

            <!-- Main Products Area -->
            <main class="flex-1">
                
                <!-- Penjualan Section -->
                <div class="bg-white rounded-lg p-4 shadow mb-6">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl md:text-2xl font-bold text-[#373E51]">Penjualan</h2>
                    </div>
                    <div class="flex flex-col md:flex-row md:items-center gap-3 md:gap-4">
                        <span class="font-semibold hidden md:inline text-[#373E51]">Filter</span>
                        <div class="flex flex-col md:flex-row gap-3 md:gap-2 md:items-center flex-1">
                            <div class="flex gap-2 overflow-x-auto pb-2 md:pb-0 scrollbar-hide">
                                <button class="tab-btn active px-4 py-2 rounded whitespace-nowrap transition-colors" data-tab="terbaru">
                                    Terbaru
                                </button>
                                <button class="tab-btn px-4 py-2 rounded whitespace-nowrap transition-colors hover:bg-gray-100" data-tab="diskon">
                                    Diskon
                                </button>
                                <button class="tab-btn px-4 py-2 rounded whitespace-nowrap transition-colors hover:bg-gray-100" data-tab="terlaris">
                                    Terlaris
                                </button>
                            </div>
                            
                            <!-- Search Box -->
                            <div class="relative flex-1 md:ml-4">
                                <i data-lucide="search" class="absolute left-3 top-1/2 transform -translate-y-1/2 h-4 w-4 text-gray-400"></i>
                                <input
                                    type="text"
                                    id="searchQuery"
                                    placeholder="Cari produk..."
                                    class="w-full border border-gray-300 rounded-lg focus:outline-none focus:border-[#41B8EA] focus:ring-1 focus:ring-[#41B8EA] transition-colors pl-10 pr-4 py-2"
                                />
                            </div>

                            <!-- Harga Dropdown -->
                            <select id="priceSort" class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-auto md:ml-auto focus:outline-none focus:border-[#41B8EA] focus:ring-1 focus:ring-[#41B8EA] transition-colors">
                                <option value="">Harga</option>
                                <option value="low">Harga: Rendah ke Tinggi</option>
                                <option value="high">Harga: Tinggi ke Rendah</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Products Grid -->
                <div id="productsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 mb-6">
                    <!-- Products will be dynamically inserted here -->
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center gap-2 mt-8">
                    <button class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors" data-page="prev">
                        <i data-lucide="chevron-left" class="h-5 w-5"></i>
                    </button>
                    <button class="page-btn active px-4 py-2 border border-gray-300 rounded-lg transition-colors" data-page="1">1</button>
                    <button class="page-btn px-4 py-2 border border-gray-300 rounded-lg transition-colors" data-page="2">2</button>
                    <button class="page-btn px-4 py-2 border border-gray-300 rounded-lg transition-colors" data-page="3">3</button>
                    <button class="page-btn px-3 py-2 border border-gray-300 rounded-lg transition-colors" data-page="next">
                        <i data-lucide="chevron-right" class="h-5 w-5"></i>
                    </button>
                </div>

            </main>

        </div>
    </div>


    <!-- Floating WhatsApp Button -->
    <a href="https://wa.me/6285810000684" 
       target="_blank" 
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#20BA5A] text-white rounded-full p-4 shadow-2xl transition-all duration-300">
        <i data-lucide="message-circle" class="h-7 w-7 relative z-10"></i>
    </a>

    <!-- JavaScript -->
    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Mock Products Data
        const products = Array.from({ length: 16 }, (_, i) => ({
            id: i + 1,
            brand: ['Daikin', 'Panasonic', 'Midea', 'Sharp'][i % 4],
            model: 'AC MULTI S 1/2 PK x 1/2 PK 2 Indoor',
            pk: ['1/2 PK', '3/4 PK', '1 PK', '1.5 PK'][i % 4],
            type: i % 3 === 0 ? 'Inverter' : 'Non Inverter',
            rating: 4.5 + (i % 3) * 0.2,
            reviews: 137,
            originalPrice: 11649000,
            price: 10019000,
            discount: 14 + (i % 3) * 2,
            image: 'https://images.unsplash.com/photo-1585771724684-38269d6639fd?w=300&h=300&fit=crop',
            features: ['midea Pionner 10', 'WALA 09/10']
        }));

        let filteredProducts = [...products];
        let currentPage = 1;
        const productsPerPage = 12;
        let selectedPK = null;
        let selectedType = null;
        let selectedCategory = null;
        let selectedBrands = [];
        let selectedOtherProducts = [];
        let currentTab = 'terbaru';

        // Mobile Menu Toggle
        // Dropdown Toggles
        function setupDropdown(toggleId, contentId, chevronId) {
            const toggle = document.getElementById(toggleId);
            const content = document.getElementById(contentId);
            const chevron = document.getElementById(chevronId);

            toggle.addEventListener('click', () => {
                content.classList.toggle('open');
                chevron.classList.toggle('rotate-180');
            });
        }

        setupDropdown('servicesToggle', 'servicesContent', 'servicesChevron');
        setupDropdown('pkCategoriesToggle', 'pkCategoriesContent', 'pkCategoriesChevron');
        setupDropdown('productCategoriesToggle', 'productCategoriesContent', 'productCategoriesChevron');
        setupDropdown('brandsFilterToggle', 'brandsFilterContent', 'brandsFilterChevron');
        setupDropdown('pkFilterToggle', 'pkFilterContent', 'pkFilterChevron');
        setupDropdown('typeFilterToggle', 'typeFilterContent', 'typeFilterChevron');
        setupDropdown('otherProductsToggle', 'otherProductsContent', 'otherProductsChevron');

        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('active');
            });
        }

        // PK Slider
        const m2Slider = document.getElementById('m2Slider');
        const m2Display = document.getElementById('m2Display');
        const sliderHandle = document.getElementById('sliderHandle');

        m2Slider.addEventListener('input', function() {
            const value = this.value;
            m2Display.textContent = value;
            
            // Calculate handle position (max width - handle width)
            const maxWidth = this.offsetWidth - 20; // 20px is handle width
            const position = (value / 250) * maxWidth;
            sliderHandle.style.left = position + 'px';
        });

        // PK Calculator
        const calculateBtn = document.getElementById('calculateBtn');
        const roomCondition = document.getElementById('roomCondition');
        const calculationResult = document.getElementById('calculationResult');
        const btuResult = document.getElementById('btuResult');
        const pkResult = document.getElementById('pkResult');

        calculateBtn.addEventListener('click', function() {
            const m2 = parseInt(m2Slider.value);
            const condition = roomCondition.value;

            if (m2 === 0 || !condition) {
                alert('Silakan pilih kondisi ruangan dan geser slider ukuran ruangan!');
                return;
            }

            const btuPerM2 = condition === 'terkena-matahari' ? 500 : 400;
            const btuMin = m2 * btuPerM2;
            const btuMax = m2 * 500;

            const btuToPK = (btu) => {
                if (btu <= 5000) return '1/2';
                if (btu <= 7000) return '3/4';
                if (btu <= 9000) return '1';
                if (btu <= 12000) return '1.5';
                if (btu <= 18000) return '2';
                return '2.5';
            };

            const pkMin = btuToPK(btuMin);
            const pkMax = btuToPK(btuMax);

            btuResult.textContent = `${btuMin.toLocaleString('id-ID')} - ${btuMax.toLocaleString('id-ID')}`;
            pkResult.textContent = pkMin === pkMax ? `${pkMin}` : `${pkMin} s/d ${pkMax}`;
            
            calculationResult.classList.remove('hidden');
        });

        // Lihat Rekomendasi Button - Auto filter berdasarkan hasil PK Calculator
        const lihatRekomendasiBtn = calculationResult?.querySelector('button');
        if (lihatRekomendasiBtn) {
            lihatRekomendasiBtn.addEventListener('click', function() {
                // Ambil nilai PK dari hasil perhitungan
                const pkText = pkResult.textContent.trim();
                
                // Parse PK value - ambil nilai maksimum untuk rekomendasi
                let recommendedPK = '';
                if (pkText.includes('s/d')) {
                    // Jika range, ambil nilai maksimum
                    const pkValues = pkText.split('s/d');
                    recommendedPK = pkValues[1].trim() + ' PK';
                } else {
                    // Jika single value
                    recommendedPK = pkText + ' PK';
                }
                
                // Set selected PK
                selectedPK = recommendedPK;
                
                // Update UI - highlight button PK yang sesuai
                document.querySelectorAll('.pk-btn').forEach(b => {
                    b.classList.remove('active');
                    if (b.dataset.pk === recommendedPK) {
                        b.classList.add('active');
                    }
                });
                
                // Update sidebar PK filter juga
                document.querySelectorAll('.pk-filter-btn').forEach(b => {
                    b.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    b.classList.add('bg-white', 'border-gray-300');
                    if (b.dataset.pk === recommendedPK) {
                        b.classList.add('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                        b.classList.remove('bg-white', 'border-gray-300');
                    }
                });
                
                // Filter products
                filterProducts();
                
                // Scroll ke product grid dengan smooth behavior
                const productsGrid = document.getElementById('productsGrid');
                if (productsGrid) {
                    productsGrid.scrollIntoView({ 
                        behavior: 'smooth', 
                        block: 'start' 
                    });
                }
                
                // Optional: Scroll sedikit ke atas untuk show filter tabs
                setTimeout(() => {
                    window.scrollBy({
                        top: -100,
                        behavior: 'smooth'
                    });
                }, 300);
            });
        }

        // PK Button Filter
        document.querySelectorAll('.pk-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const pk = this.dataset.pk;
                
                if (selectedPK === pk) {
                    selectedPK = null;
                    this.classList.remove('active');
                } else {
                    document.querySelectorAll('.pk-btn').forEach(b => b.classList.remove('active'));
                    selectedPK = pk;
                    this.classList.add('active');
                }
                
                filterProducts();
            });
        });

        // Type Filter (Inverter/Non Inverter)
        function setupTypeBtn(btnId, type, className) {
            const btn = document.getElementById(btnId);
            if (btn) {
                btn.addEventListener('click', function() {
                    if (selectedType === type) {
                        selectedType = null;
                        this.classList.remove('active', className);
                    } else {
                        document.querySelectorAll('.type-btn').forEach(b => b.classList.remove('active', 'inverter', 'non-inverter'));
                        selectedType = type;
                        this.classList.add('active', className);
                    }
                    filterProducts();
                });
            }
        }

        setupTypeBtn('inverterBtn', 'Inverter', 'inverter');
        setupTypeBtn('nonInverterBtn', 'Non Inverter', 'non-inverter');
        setupTypeBtn('inverterBtnMobile', 'Inverter', 'inverter');
        setupTypeBtn('nonInverterBtnMobile', 'Non Inverter', 'non-inverter');

        // Brand Filter (Sidebar)
        document.querySelectorAll('.brand-filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const brand = this.dataset.brand;
                
                if (selectedBrands.includes(brand)) {
                    selectedBrands = selectedBrands.filter(b => b !== brand);
                    this.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.add('bg-white', 'border-gray-300');
                } else {
                    selectedBrands.push(brand);
                    this.classList.add('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.remove('bg-white', 'border-gray-300');
                }
                
                filterProducts();
            });
        });

        // PK Filter (Sidebar)
        document.querySelectorAll('.pk-filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const pk = this.dataset.pk;
                
                if (selectedPK === pk) {
                    selectedPK = null;
                    this.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.add('bg-white', 'border-gray-300');
                } else {
                    document.querySelectorAll('.pk-filter-btn').forEach(b => {
                        b.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                        b.classList.add('bg-white', 'border-gray-300');
                    });
                    selectedPK = pk;
                    this.classList.add('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.remove('bg-white', 'border-gray-300');
                }
                
                filterProducts();
            });
        });

        // Type Filter (Sidebar)
        function setupTypFilterBtn(btnId, type) {
            const btn = document.getElementById(btnId);
            if (btn) {
                btn.addEventListener('click', function() {
                    if (selectedType === type) {
                        selectedType = null;
                        this.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                        this.classList.add('bg-white', 'border-gray-300');
                    } else {
                        document.querySelectorAll('.type-filter-btn').forEach(b => {
                            b.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                            b.classList.add('bg-white', 'border-gray-300');
                        });
                        selectedType = type;
                        this.classList.add('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                        this.classList.remove('bg-white', 'border-gray-300');
                    }
                    filterProducts();
                });
            }
        }

        setupTypFilterBtn('inverterFilterBtn', 'Inverter');
        setupTypFilterBtn('nonInverterFilterBtn', 'Non Inverter');

        // Other Products Filter
        document.querySelectorAll('.other-product-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const product = this.dataset.product;
                
                if (selectedOtherProducts.includes(product)) {
                    selectedOtherProducts = selectedOtherProducts.filter(p => p !== product);
                    this.classList.remove('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.add('bg-white', 'border-gray-300');
                } else {
                    selectedOtherProducts.push(product);
                    this.classList.add('bg-[#41B8EA]', 'text-white', 'border-[#41B8EA]');
                    this.classList.remove('bg-white', 'border-gray-300');
                }
                
                filterProducts();
            });
        });

        // Category Filter
        document.querySelectorAll('.category-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const category = this.dataset.category;
                
                if (selectedCategory === category) {
                    selectedCategory = null;
                    this.classList.remove('active');
                } else {
                    document.querySelectorAll('.category-btn').forEach(b => b.classList.remove('active'));
                    selectedCategory = category;
                    this.classList.add('active');
                }
                
                filterProducts();
            });
        });

        // Tab Filter
        document.querySelectorAll('.tab-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                currentTab = this.dataset.tab;
                filterProducts();
            });
        });

        // Search Functionality
        const searchInput = document.getElementById('searchQuery');
        let searchQuery = '';
        
        searchInput.addEventListener('input', function() {
            searchQuery = this.value.toLowerCase();
            filterProducts();
        });

        // Price Sort Dropdown
        const priceSortSelect = document.getElementById('priceSort');
        
        priceSortSelect.addEventListener('change', function() {
            const sortValue = this.value;
            if (sortValue === 'low') {
                currentTab = 'harga-rendah';
            } else if (sortValue === 'high') {
                currentTab = 'harga-tinggi';
            }
            filterProducts();
        });

        // Filter Products
        function filterProducts() {
            filteredProducts = products.filter(product => {
                const brandMatch = selectedBrands.length === 0 || selectedBrands.includes(product.brand);
                const pkMatch = !selectedPK || product.pk === selectedPK;
                const typeMatch = !selectedType || product.type === selectedType;
                const searchMatch = searchQuery === '' || 
                    product.brand.toLowerCase().includes(searchQuery) ||
                    product.model.toLowerCase().includes(searchQuery) ||
                    product.pk.toLowerCase().includes(searchQuery) ||
                    product.type.toLowerCase().includes(searchQuery);
                return brandMatch && pkMatch && typeMatch && searchMatch;
            });

            // Sort based on tab
            switch(currentTab) {
                case 'diskon':
                    filteredProducts.sort((a, b) => b.discount - a.discount);
                    break;
                case 'terlaris':
                    filteredProducts.sort((a, b) => b.reviews - a.reviews);
                    break;
                case 'harga-rendah':
                    filteredProducts.sort((a, b) => a.price - b.price);
                    break;
                case 'harga-tinggi':
                    filteredProducts.sort((a, b) => b.price - a.price);
                    break;
                default: // terbaru
                    filteredProducts.sort((a, b) => b.id - a.id);
            }

            currentPage = 1;
            renderProducts();
        }

        // Render Products
        function renderProducts() {
            const grid = document.getElementById('productsGrid');
            const start = (currentPage - 1) * productsPerPage;
            const end = start + productsPerPage;
            const pageProducts = filteredProducts.slice(start, end);

            grid.innerHTML = pageProducts.map(product => `
                <div class="product-card bg-white rounded-lg shadow hover:shadow-lg transition-shadow overflow-hidden">
                    <div class="relative">
                        <img src="${product.image}" alt="${product.model}" class="w-full h-48 object-cover">
                        <div class="absolute top-2 right-2 bg-[#F99C1C] text-white rounded-full w-12 h-12 flex items-center justify-center font-bold">
                            ${product.discount}%
                        </div>
                    </div>
                    <div class="p-3">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="text-xs px-2 py-1 bg-[#41B8EA] text-white rounded">${product.type === 'Inverter' ? 'Inverter' : 'Non Inv'}</span>
                            <span class="text-xs px-2 py-1 bg-[#3EB48A] text-white rounded">${product.pk}</span>
                        </div>
                        <h3 class="font-semibold text-sm mb-2 line-clamp-2">${product.brand} ${product.model}</h3>
                        <div class="flex items-center gap-1 mb-2">
                            ${Array.from({ length: 5 }).map((_, i) => 
                                `<i data-lucide="star" class="h-3 w-3 ${i < Math.floor(product.rating) ? 'fill-yellow-400 text-yellow-400' : 'text-gray-300'}"></i>`
                            ).join('')}
                            <span class="text-xs text-gray-500 ml-1">${product.reviews}</span>
                        </div>
                        <div class="mb-3">
                            <div class="text-xs text-gray-400 line-through">Rp ${product.originalPrice.toLocaleString('id-ID')}</div>
                            <div class="text-lg font-bold text-[#ED2024]">Rp ${product.price.toLocaleString('id-ID')}</div>
                        </div>
                        <div class="flex gap-2">
                            <button class="flex-1 text-xs border border-[#41B8EA] text-[#41B8EA] hover:bg-[#41B8EA] hover:text-white py-2 px-3 rounded transition-colors">
                                Komparasi
                            </button>
                            <button class="flex-1 text-xs bg-[#F99C1C] hover:bg-[#F99C1C]/90 text-white py-2 px-3 rounded transition-colors">
                                Pesan
                            </button>
                        </div>
                    </div>
                </div>
            `).join('');

            lucide.createIcons();
        }

        // Pagination
        document.querySelectorAll('.page-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const page = this.dataset.page;
                const maxPages = Math.ceil(filteredProducts.length / productsPerPage);
                
                if (page === 'prev' && currentPage > 1) {
                    currentPage--;
                } else if (page === 'next' && currentPage < maxPages) {
                    currentPage++;
                } else if (!isNaN(page)) {
                    currentPage = parseInt(page);
                }

                document.querySelectorAll('.page-btn').forEach(b => b.classList.remove('active'));
                const currentBtn = document.querySelector(`.page-btn[data-page="${currentPage}"]`);
                if (currentBtn) currentBtn.classList.add('active');

                renderProducts();
                window.scrollTo({ top: 0, behavior: 'smooth' });
            });
        });

        // Initial render
        renderProducts();

        // PK Scroll Container - Drag to Scroll
        const pkScrollContainer = document.getElementById('pkScrollContainer');
        let isPKDragging = false;
        let pkStartX;
        let pkScrollLeft;

        pkScrollContainer.addEventListener('mousedown', (e) => {
            isPKDragging = true;
            pkScrollContainer.style.cursor = 'grabbing';
            pkStartX = e.pageX - pkScrollContainer.offsetLeft;
            pkScrollLeft = pkScrollContainer.scrollLeft;
        });

        pkScrollContainer.addEventListener('mouseleave', () => {
            isPKDragging = false;
            pkScrollContainer.style.cursor = 'grab';
        });

        pkScrollContainer.addEventListener('mouseup', () => {
            isPKDragging = false;
            pkScrollContainer.style.cursor = 'grab';
        });

        pkScrollContainer.addEventListener('mousemove', (e) => {
            if (!isPKDragging) return;
            e.preventDefault();
            const x = e.pageX - pkScrollContainer.offsetLeft;
            const walk = (x - pkStartX) * 2;
            pkScrollContainer.scrollLeft = pkScrollLeft - walk;
        });

        // Products Scroll Container - Drag to Scroll
        const productsScrollContainer = document.getElementById('productsScrollContainer');
        let isProductsDragging = false;
        let productsStartX;
        let productsScrollLeft;

        productsScrollContainer.addEventListener('mousedown', (e) => {
            isProductsDragging = true;
            productsScrollContainer.style.cursor = 'grabbing';
            productsStartX = e.pageX - productsScrollContainer.offsetLeft;
            productsScrollLeft = productsScrollContainer.scrollLeft;
        });

        productsScrollContainer.addEventListener('mouseleave', () => {
            isProductsDragging = false;
            productsScrollContainer.style.cursor = 'grab';
        });

        productsScrollContainer.addEventListener('mouseup', () => {
            isProductsDragging = false;
            productsScrollContainer.style.cursor = 'grab';
        });

        productsScrollContainer.addEventListener('mousemove', (e) => {
            if (!isProductsDragging) return;
            e.preventDefault();
            const x = e.pageX - productsScrollContainer.offsetLeft;
            const walk = (x - productsStartX) * 2;
            productsScrollContainer.scrollLeft = productsScrollLeft - walk;
        });

        // Re-initialize Lucide icons periodically
        setInterval(() => {
            lucide.createIcons();
        }, 1000);
    </script>
</body>


<?= $this->endSection() ?>