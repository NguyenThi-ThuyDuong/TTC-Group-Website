<footer class="bg-[#f0f6fa] text-[#00549a] border-t border-slate-100">
    <div class="mx-auto grid max-w-[1440px] gap-8 px-6 py-14 md:grid-cols-2 lg:grid-cols-[1.4fr_.6fr_1fr_1fr] md:px-10">
        <div class="flex gap-4">
            <img src="{{ asset('images/logo-ttcgroup-v2.png') }}" alt="TTC Group" class="h-16 w-auto self-start">
            <div class="text-[12px] leading-6 text-slate-600">
                <h3 class="mb-3 text-[15px] font-bold text-[#003b70]">TTC GROUP</h3>
                <p>Địa chỉ: 253 Hoàng Văn Thụ, Phường Tân Sơn Hòa, TP.HCM</p>
                <p class="mt-1">Điện thoại: +84 28 3997 7727</p>
                <p>Email: <a href="mailto:info@ttcgroup.vn" class="hover:text-[#ff6500]">info@ttcgroup.vn</a></p>
                <p class="mt-1">Giấy chứng nhận đăng ký kinh doanh: 0301 466 073</p>
                <p>Cấp ngày: 25.07.2007</p>
                <p>Nơi cấp: Phòng Đăng ký kinh doanh - Sở Kế hoạch và Đầu tư Thành phố Hồ Chí Minh</p>
            </div>
        </div>
        <div>
            <h3 class="text-[15px] font-bold text-[#003b70] uppercase tracking-wider">LIÊN KẾT NHANH</h3>
            <ul class="mt-5 space-y-2 text-[13px] text-slate-600">
                @foreach([
                    ['about', 'Giới thiệu'],
                    ['business', 'Lĩnh vực hoạt động'],
                    ['social', 'Trách nhiệm xã hội'],
                    ['media', 'Truyền thông'],
                    ['careers', 'Tuyển dụng']
                ] as [$route, $text])
                    <li><a class="transition hover:text-[#ff6500] text-slate-600" href="{{ route($route) }}">{{ $text }}</a></li>
                @endforeach
                <li><a class="transition hover:text-[#ff6500] text-slate-600" href="#">Tài liệu khác</a></li>
            </ul>
        </div>
        <div>
            <h3 class="text-[15px] font-bold text-[#003b70] uppercase tracking-wider">GÓC HÌNH ẢNH</h3>
            <div class="mt-5 space-y-2">
                <div class="overflow-hidden rounded-xs border border-slate-100">
                    <img src="{{ asset('images/ttc/hero-1.jpg') }}" class="aspect-[16/9] w-full object-cover" alt="Hoạt động TTC">
                </div>
                <div class="grid grid-cols-3 gap-2">
                    @foreach(['agriculture.jpg', 'energy.jpg', 'hospitality.jpg'] as $image)
                        <div class="overflow-hidden rounded-xs border border-slate-100">
                            <img src="{{ asset('images/ttc/'.$image) }}" class="aspect-[4/3] w-full object-cover" alt="Hoạt động TTC">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <h3 class="text-[15px] font-bold text-[#003b70] uppercase tracking-wider">GÓC VIDEO</h3>
            <div class="mt-5 space-y-2">
                <a href="https://www.youtube.com/@ttcgroup4745" target="_blank" rel="noopener" class="group relative block overflow-hidden rounded-xs border border-slate-100">
                    <img src="{{ asset('images/ttc/hero-2.jpg') }}" class="aspect-[16/9] w-full object-cover transition duration-500 group-hover:scale-105" alt="TTC Video">
                    <div class="absolute inset-0 flex items-center justify-center bg-black/10 transition-colors group-hover:bg-black/20">
                        <svg class="h-12 w-12 text-[#ff0000] drop-shadow-md" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </div>
                </a>
                <div class="grid grid-cols-3 gap-2">
                    @foreach([
                        ['industrial.jpg', 'https://www.youtube.com/@ttcgroup4745'],
                        ['education.jpg', 'https://www.youtube.com/@ttcgroup4745'],
                        ['energy.jpg', 'https://www.youtube.com/@ttcgroup4745']
                    ] as [$img, $url])
                        <a href="{{ $url }}" target="_blank" rel="noopener" class="group relative block overflow-hidden rounded-xs border border-slate-100">
                            <img src="{{ asset('images/ttc/'.$img) }}" class="aspect-[4/3] w-full object-cover transition duration-500 group-hover:scale-105" alt="TTC Video">
                            <div class="absolute inset-0 flex items-center justify-center bg-black/10 transition-colors group-hover:bg-black/20">
                                <svg class="h-6 w-6 text-[#ff0000] drop-shadow-xs" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.498 6.163a3.003 3.003 0 00-2.11-2.11C19.517 3.545 12 3.545 12 3.545s-7.517 0-9.388.507a3.003 3.003 0 00-2.11 2.11C0 8.033 0 12 0 12s0 3.967.502 5.837a3.003 3.003 0 002.11 2.11c1.871.507 9.388.507 9.388.507s7.517 0 9.388-.507a3.003 3.003 0 002.11-2.11C24 15.967 24 12 24 12s0-3.967-.502-5.837zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                                </svg>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="border-t border-[#00549a]/10 bg-[#e6f0f5]/50">
        <div class="mx-auto flex max-w-[1440px] flex-col justify-between gap-4 px-6 py-5 text-[11px] font-medium text-slate-500 md:flex-row md:px-10">
            <span>© 2023 TTC. All Rights Reserved.</span>
            <div class="flex gap-6">
                <a href="#" class="hover:text-[#ff6500] transition-colors">Điều khoản bảo mật</a>
                <a href="#" class="hover:text-[#ff6500] transition-colors">Quy định pháp lý</a>
                <a href="#" class="hover:text-[#ff6500] transition-colors">Sơ đồ website</a>
            </div>
        </div>
    </div>
</footer>
