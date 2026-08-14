@extends('layouts.app')
@section('title','Giới thiệu | TTC Group')
@section('content')

<!-- Breadcrumb -->
<div class="border-b border-slate-100 bg-[#f8fafc]/50">
    <div class="mx-auto flex max-w-[1440px] items-center gap-2 px-6 py-4 text-[13px] text-slate-500 md:px-10">
        <a href="{{ route('home') }}" class="text-slate-400 hover:text-[#ff6500] transition-colors" aria-label="Trang chủ">
            <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
            </svg>
        </a>
        <span class="text-slate-300">›</span>
        <a href="{{ route('about') }}" class="hover:text-[#ff6500] transition-colors">Giới thiệu</a>
        <span class="text-slate-300">›</span>
        <span class="text-slate-700 font-medium">Tổng quan</span>
    </div>
</div>

<!-- Section 1: Chairman Message -->
<section class="py-12 md:py-20 bg-white">
    <div class="mx-auto max-w-[1440px] px-6 md:px-10">
        <div class="grid gap-12 lg:grid-cols-[1.4fr_1fr] items-start">
            <div class="relative">
                <!-- Open quote mark decoration -->
                <span class="text-6xl font-serif text-slate-200 leading-none select-none">“</span>
                <h1 class="text-[28px] md:text-[34px] font-bold text-[#ff6500] leading-tight mt-2">
                    Thông điệp của Chủ tịch Tập đoàn TTC
                </h1>
                <div class="mt-6 pr-2 max-h-[260px] overflow-y-auto text-[14px] leading-8 text-slate-600 custom-scrollbar">
                    <p class="font-bold text-slate-800 mb-4">Quý cổ đông, nhà đầu tư, đối tác và khách hàng thân mến!</p>
                    <p class="mb-4">Năm 2026, Tập đoàn TTC chính thức bước vào năm đầu tiên của Chiến lược phát triển 2026 - 2030, mở ra một chặng đường mới với nhiều kỳ vọng và cơ hội. Bức tranh kinh tế vĩ mô cho thấy những tín hiệu tích cực hơn: Đà phục hồi rõ nét, dư địa được mở rộng cùng những cải cách và động lực mới đang hình thành, tạo điều kiện thuận lợi cho cộng đồng doanh nghiệp nói chung và Tập đoàn TTC nói riêng.</p>
                    <p class="mb-4">TTC đang đứng trước kỷ nguyên vươn mình, nơi tăng trưởng vừa đến từ quy mô vừa đến từ chất lượng quản trị, hiệu quả vận hành và khả năng tận dụng sức mạnh tổng hợp của toàn hệ sinh thái. Trong bối cảnh đó, Tập đoàn bước vào giai đoạn tăng tốc có kiểm soát, đẩy mạnh quản trị điều hành theo chuẩn mực cao hơn - nơi mỗi mục tiêu đều gắn với trách nhiệm rõ ràng, mỗi kế hoạch gắn với nguồn lực cụ thể và mỗi kết quả đều được kiểm chứng bằng thực tế. Đà phát triển được xây dựng trên nền tảng tài chính lành mạnh, kiểm soát rủi ro và phát huy sức mạnh tương hỗ giữa các đơn vị thành viên.</p>
                </div>
                
                <div class="relative mt-8 flex flex-col items-start pt-6 border-t border-slate-100 w-fit">
                    <p class="text-[16px] font-bold text-[#003b70]">Ông Đặng Văn Thành</p>
                    <p class="text-[13px] text-slate-500 mt-1">Chủ tịch Tập đoàn TTC</p>
                    <!-- Close quote mark decoration -->
                    <span class="absolute -right-8 bottom-0 text-6xl font-serif text-slate-200 leading-none select-none">”</span>
                </div>
            </div>
            
            <div class="overflow-hidden rounded-md shadow-sm border border-slate-100 bg-slate-50">
                <img src="{{ asset('images/ttc/chairman.jpg') }}" alt="Ông Đặng Văn Thành - Chủ tịch Tập đoàn TTC" class="w-full h-auto max-h-[480px] object-cover mx-auto" onerror="this.src='https://placehold.co/600x700?text=Chairman+Photo'">
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Vision, Mission, Core Values -->
<section class="py-16 md:py-20 bg-[#f8fafc]">
    <div class="mx-auto max-w-[1440px] px-6 md:px-10">
        <div class="text-center">
            <h2 class="text-[26px] md:text-[32px] font-bold text-[#ff6500] leading-none">Tầm nhìn - Sứ mệnh - Giá trị cốt lõi</h2>
        </div>
        
        <div class="mt-14 grid gap-8 md:grid-cols-3">
            <!-- Vision Card -->
            <div class="bg-white p-8 rounded-xs border border-[#003b70]/80 shadow-[4px_4px_0px_#003b70] flex flex-col items-center text-center">
                <div class="h-14 w-14 rounded-full bg-[#f0f6fa] flex items-center justify-center text-[#003b70] mb-6">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.172l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#003b70] mb-4">Tầm nhìn</h3>
                <p class="text-[13px] leading-6 text-slate-600">
                    Tầm nhìn đến năm 2030 trở thành Tập đoàn đầu tư đa ngành phát triển bền vững, lấy nhân lực, tài lực, sức mạnh hệ sinh thái và hiệu quả làm nền tảng kiến tạo giá trị dài hạn.
                </p>
            </div>

            <!-- Mission Card -->
            <div class="bg-white p-8 rounded-xs border border-[#003b70]/80 shadow-[4px_4px_0px_#003b70] flex flex-col items-center">
                <div class="h-14 w-14 rounded-full bg-[#f0f6fa] flex items-center justify-center text-[#003b70] mb-6">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#003b70] mb-4 text-center">Sứ mệnh</h3>
                <ul class="text-left text-[13px] leading-6 text-slate-600 space-y-2">
                    <li class="flex items-start gap-1.5">
                        <span class="text-[#003b70] font-bold">•</span>
                        <span>Tạo giá trị gia tăng cho tất cả các thành phần tham gia vào chuỗi giá trị Tập đoàn.</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                        <span class="text-[#003b70] font-bold">•</span>
                        <span>Khẳng định thương hiệu Việt trong quá trình hội nhập.</span>
                    </li>
                </ul>
            </div>

            <!-- Core Values Card -->
            <div class="bg-white p-8 rounded-xs border border-[#003b70]/80 shadow-[4px_4px_0px_#003b70] flex flex-col items-center">
                <div class="h-14 w-14 rounded-full bg-[#f0f6fa] flex items-center justify-center text-[#003b70] mb-6">
                    <svg class="h-7 w-7" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-[#003b70] mb-4 text-center">Giá trị cốt lõi</h3>
                <ul class="text-left text-[13px] leading-6 text-slate-600 space-y-2">
                    <li class="flex items-start gap-1.5">
                        <span class="text-[#003b70] font-bold">•</span>
                        <span><strong>Nỗ lực không ngừng:</strong> cải tiến, cải tiến và cải tiến.</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                        <span class="text-[#003b70] font-bold">•</span>
                        <span><strong>Chuyên nghiệp toàn diện:</strong> từ quản trị đến kiểm soát, điều hành.</span>
                    </li>
                    <li class="flex items-start gap-1.5">
                        <span class="text-[#003b70] font-bold">•</span>
                        <span><strong>Trách nhiệm lâu dài:</strong> đối với xã hội, khách hàng, cán bộ nhân viên, nhà đầu tư và ngân sách nhà nước.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: History Preview -->
<section class="py-16 md:py-24 bg-white">
    <div class="mx-auto max-w-[1440px] px-6 md:px-10">
        <div class="grid gap-12 lg:grid-cols-2 items-center">
            <div>
                <h2 class="text-[26px] md:text-[32px] font-bold text-[#ff6500] leading-tight">
                    Lịch sử hình thành và phát triển
                </h2>
                <p class="mt-6 text-[14px] leading-8 text-slate-600">
                    Xuyên suốt gần 5 thập kỷ hình thành và phát triển, TTC luôn tâm niệm sứ mệnh "Vì cộng đồng, phát triển địa phương", thúc đẩy nền kinh tế phát triển phải cân bằng, hài hòa với lợi ích của xã hội.
                </p>
                <div class="mt-8">
                    <a href="{{ route('about.history') }}" class="inline-flex items-center gap-2 border border-[#ff6500] text-[#ff6500] px-7 py-3 rounded-xs font-bold text-xs hover:bg-[#ff6500] hover:text-white transition-all duration-300">
                        Xem chi tiết
                        <span class="text-sm">→</span>
                    </a>
                </div>
            </div>
            
            <div class="overflow-hidden rounded-md border border-slate-100 bg-slate-50">
                <img src="{{ asset('images/ttc/history-watch.jpg') }}" alt="Lịch sử TTC" class="w-full h-auto max-h-[380px] object-cover mx-auto" onerror="this.src='https://placehold.co/700x400?text=History+Watch+Photo'">
            </div>
        </div>
    </div>
</section>

@endsection
