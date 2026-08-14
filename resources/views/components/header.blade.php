<header class="fixed inset-x-0 top-0 z-50 bg-white shadow-[0_2px_12px_rgba(0,59,112,.08)]">
    <div class="hidden h-10 border-b border-slate-100 lg:block">
        <div class="mx-auto flex h-full max-w-[1440px] items-center justify-between px-10 text-[11px] font-semibold">
            <div class="flex items-center gap-3">
                <button
                    class="lang-btn lang-btn-vi font-bold text-[#ff6500] cursor-pointer hover:opacity-85 transition-opacity"
                    onclick="toggleLanguage('vi')">VN</button>
                <span class="text-slate-300">|</span>
                <button class="lang-btn lang-btn-en text-slate-400 cursor-pointer hover:opacity-85 transition-opacity"
                    onclick="toggleLanguage('en')">EN</button>
                <button class="ml-3 text-[#00549a] hover:text-[#ff6500] transition-colors cursor-pointer"
                    aria-label="Tìm kiếm">
                    <svg class="h-3.5 w-3.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center gap-5">
                <a href="tel:+842839977727" class="flex items-center gap-1.5 text-[#ff6500] hover:underline">
                    <svg class="h-3.5 w-3.5 text-[#ff6500]" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M21.384 17.791c-1.422-1.396-3.21-1.396-4.632 0l-1.077 1.057c-.729-.39-1.564-.93-2.344-1.71-.78-.78-1.32-1.615-1.71-2.344l1.057-1.077c1.396-1.422 1.396-3.21 0-4.632L11.233 7.64c-1.422-1.396-3.21-1.396-4.632 0L5.344 8.897c-1.201 1.201-1.601 3.003-.8 4.805 1.485 3.329 4.381 6.225 7.71 7.71 1.802.8 3.604.4 4.805-.8l1.256-1.257c1.396-1.422 1.396-3.21 0-4.632l-1.442-1.442z" />
                    </svg>
                    <span>+84 28 3997 7727</span>
                </a>
                <span class="h-3 w-px bg-slate-200"></span>
                <a href="mailto:info@ttcgroup.vn" class="flex items-center gap-1.5 text-[#ff6500] hover:underline">
                    <svg class="h-3.5 w-3.5 text-[#ff6500]" fill="none" stroke="currentColor" stroke-width="2.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                    </svg>
                    <span>info@ttcgroup.vn</span>
                </a>
                <span class="h-3 w-px bg-slate-200"></span>
                <a href="https://www.facebook.com/ttcgroup1979" target="_blank" rel="noopener"
                    class="text-[#ff6500] hover:opacity-85 transition-opacity" aria-label="Facebook">
                    <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c4.56-.93 8-4.96 8-9.75z" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/@ttcgroup4745" target="_blank" rel="noopener"
                    class="text-[#ff6500] hover:opacity-85 transition-opacity" aria-label="YouTube">
                    <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="relative h-20">
        <div
            class="mx-auto hidden h-full max-w-[1440px] items-center justify-between px-10 text-[15px] font-semibold text-gray-800 lg:flex">
            <nav class="flex h-full items-center gap-8">
                <a href="{{ route('home') }}" class="text-[#ff6500] hover:opacity-80 transition-opacity"
                    aria-label="Trang chủ">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                </a>
                <div class="group relative flex h-full items-center">
                    <a href="{{ route('about') }}" class="hover:text-[#ff6500] transition-colors py-2">Giới thiệu</a>
                    <div
                        class="invisible absolute left-0 top-full w-64 border-t-2 border-[#ff6500] bg-white py-3 text-left normal-case opacity-0 shadow-xl transition group-hover:visible group-hover:opacity-100">

                        <a class="block px-5 py-2 hover:text-[#ff6500] hover:bg-slate-50 transition-colors"
                            href="{{ route('about.history') }}">Lịch sử hình thành</a>
                        <a class="block px-5 py-2 hover:text-[#ff6500] hover:bg-slate-50 transition-colors"
                            href="{{ route('about.members') }}">Đơn vị thành viên</a>
                    </div>
                </div>
                <div class="group relative flex h-full items-center">
                    <a href="{{ route('business') }}" class="hover:text-[#ff6500] transition-colors py-2">Lĩnh vực hoạt
                        động</a>
                    <div
                        class="invisible absolute left-0 top-full w-64 border-t-2 border-[#ff6500] bg-white py-3 text-left normal-case opacity-0 shadow-xl transition group-hover:visible group-hover:opacity-100">
                        @foreach (['agriculture' => 'Nông nghiệp', 'energy' => 'Năng lượng', 'real_estate' => 'Bất động sản', 'industrial' => 'BĐS Công nghiệp', 'hospitality' => 'Du lịch', 'education' => 'Giáo dục'] as $route => $label)
                            <a class="block px-5 py-2 hover:text-[#ff6500] hover:bg-slate-50 transition-colors"
                                href="{{ route('business.' . $route) }}">{{ $label }}</a>
                        @endforeach
                    </div>
                </div>
            </nav>
            <a class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2" href="{{ route('home') }}">
                <img src="{{ asset('images/logo-ttcgroup-v2.png') }}" alt="TTC Group" class="h-16 w-auto">
            </a>
            <nav class="flex h-full items-center gap-8">
                <a class="hover:text-[#ff6500] transition-colors py-2" href="{{ route('social') }}">Trách nhiệm xã
                    hội</a>
                <a class="hover:text-[#ff6500] transition-colors py-2" href="{{ route('media') }}">Truyền thông</a>
                <a class="hover:text-[#ff6500] transition-colors py-2" href="{{ route('careers') }}">Tuyển dụng</a>
            </nav>
        </div>
        <div class="flex h-full items-center justify-between px-5 lg:hidden">
            <button type="button" onclick="toggleTtcMenu()" class="text-2xl text-[#00549a]"
                aria-label="Mở menu">☰</button>
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo-ttcgroup-v2.png') }}" alt="TTC Group"
                    class="h-11"></a>
            <button class="text-lg text-[#00549a]" aria-label="Tìm kiếm">⌕</button>
        </div>
    </div>
    <div id="ttcMobileMenu"
        class="fixed inset-y-0 left-0 z-50 w-[290px] -translate-x-full bg-white p-7 shadow-2xl transition-transform duration-300 lg:hidden">
        <div class="mb-8 flex items-center justify-between">
            <img src="{{ asset('images/logo-ttcgroup-v2.png') }}" alt="TTC Group" class="h-12">
            <button onclick="toggleTtcMenu()" class="text-2xl">×</button>
        </div>
        <nav class="space-y-1 text-sm font-semibold text-[#00549a]">
            <a class="block border-b py-4" href="{{ route('about') }}">Giới thiệu</a>
            <a class="block border-b py-4" href="{{ route('business') }}">Lĩnh vực hoạt động</a>
            <a class="block border-b py-4" href="{{ route('social') }}">Trách nhiệm xã hội</a>
            <a class="block border-b py-4" href="{{ route('media') }}">Truyền thông</a>
            <a class="block border-b py-4" href="{{ route('careers') }}">Tuyển dụng</a>
        </nav>
    </div>
</header>
<script>function toggleTtcMenu() { document.getElementById('ttcMobileMenu').classList.toggle('-translate-x-full') }</script>