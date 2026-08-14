@extends('layouts.app')

@section('title', 'Truyền thông - TTC Group')

@section('content')

<style>
    .news-page {
        font-family: 'Montserrat', sans-serif;
    }

    .news-card {
        transition:
            opacity 0.6s ease,
            transform 0.6s ease;
    }

    .news-card:hover {
        transform: translateY(-4px);
    }

    .news-image {
        overflow: hidden;
    }

    .news-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .news-card:hover .news-image img {
        transform: scale(1.05);
    }

    .featured-image {
        overflow: hidden;
    }

    .featured-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .featured-image:hover img {
        transform: scale(1.03);
    }

    .tab-scroll {
        scrollbar-width: none;
    }

    .tab-scroll::-webkit-scrollbar {
        display: none;
    }

    .news-hidden {
        opacity: 0;
        transform: translateY(25px);
    }

    .news-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .back-top {
        position: fixed;
        right: 25px;
        bottom: 25px;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #00549a;
        color: white;
        border-radius: 50%;
        opacity: 0;
        visibility: hidden;
        transform: translateY(15px);
        transition: all 0.3s ease;
        z-index: 100;
        cursor: pointer;
    }

    .back-top.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
</style>


<div class="news-page">

    {{-- Breadcrumb --}}
    <section class="bg-white border-b border-gray-100">

        <div class="max-w-[1320px] mx-auto px-4 md:px-8 py-4">

            <div class="flex items-center gap-2 text-sm">

                <a
                    href="{{ route('home') }}"
                    class="text-gray-500 hover:text-[#00549a] transition-colors">

                    Trang chủ

                </a>

                <span class="text-gray-300">
                    /
                </span>

                <span class="text-[#00549a] font-semibold">
                    Truyền thông
                </span>

            </div>

        </div>

    </section>


    {{-- Main --}}
    <main>

        <section class="bg-white py-12 md:py-16">

            <div class="max-w-[1320px] mx-auto px-4 md:px-8">


                {{-- Title --}}
                <div class="text-center mb-10 md:mb-12">

                    <h1
                        class="text-3xl md:text-4xl lg:text-[42px]
                               font-extrabold
                               text-[#00549a]">

                        Truyền thông

                    </h1>

                </div>


                {{-- Tabs --}}
                <div class="tab-scroll overflow-x-auto border-b border-gray-200 mb-10 md:mb-14">
                    <div class="flex items-center justify-start md:justify-center gap-6 md:gap-8 min-w-max">
                        <button type="button" onclick="switchMediaTab('tin-tuc')" id="tab-btn-tin-tuc" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-[#ff6500] border-b-2 border-[#ff6500] whitespace-nowrap cursor-pointer transition-colors">
                            Tin tức TTC
                        </button>
                        <button type="button" onclick="switchMediaTab('goc-bao-chi')" id="tab-btn-goc-bao-chi" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-gray-500 hover:text-[#ff6500] border-b-2 border-transparent whitespace-nowrap cursor-pointer transition-colors">
                            Góc báo chí
                        </button>
                        <button type="button" onclick="switchMediaTab('ban-tin-ttc')" id="tab-btn-ban-tin-ttc" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-gray-500 hover:text-[#ff6500] border-b-2 border-transparent whitespace-nowrap cursor-pointer transition-colors">
                            Bản tin TTC
                        </button>
                        <button type="button" onclick="switchMediaTab('thu-vien-anh')" id="tab-btn-thu-vien-anh" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-gray-500 hover:text-[#ff6500] border-b-2 border-transparent whitespace-nowrap cursor-pointer transition-colors">
                            Thư viện ảnh
                        </button>
                        <button type="button" onclick="switchMediaTab('video')" id="tab-btn-video" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-gray-500 hover:text-[#ff6500] border-b-2 border-transparent whitespace-nowrap cursor-pointer transition-colors">
                            Video
                        </button>
                        <button type="button" onclick="switchMediaTab('tai-lieu')" id="tab-btn-tai-lieu" class="media-tab-btn pb-4 text-sm md:text-base font-semibold text-gray-500 hover:text-[#ff6500] border-b-2 border-transparent whitespace-nowrap cursor-pointer transition-colors">
                            Tài liệu khác
                        </button>
                    </div>
                </div>

                {{-- TAB 1: TIN TỨC TTC --}}
                <div id="tab-content-tin-tuc" class="media-tab-content block">
                    @if(isset($news[0]))
                        @php $featured = $news[0]; @endphp
                        <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-14 md:mb-20">
                            <div class="flex flex-col justify-center order-2 lg:order-1">
                                <span class="inline-flex w-fit items-center px-4 py-1.5 mb-4 text-xs font-bold uppercase tracking-wider text-white bg-[#00549a]">
                                    Tin nổi bật
                                </span>
                                <h2 class="text-2xl md:text-3xl lg:text-[32px] leading-tight font-extrabold text-[#00549a]">
                                    {{ $featured['title'] }}
                                </h2>
                                @if(!empty($featured['summary']))
                                    <p class="mt-4 text-base md:text-lg leading-relaxed text-gray-600">
                                        {{ $featured['summary'] }}
                                    </p>
                                @endif
                                <div class="mt-6">
                                    <a href="#" class="inline-flex items-center gap-2 font-semibold text-[#00549a] hover:text-[#ff6500] transition-colors">
                                        <span>Xem thêm</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="order-1 lg:order-2">
                                <div class="featured-image w-full h-[260px] md:h-[360px] lg:h-[430px] rounded-lg shadow-md">
                                    <img src="{{ $featured['image'] }}" alt="{{ $featured['title'] }}" loading="eager" class="w-full h-full object-cover">
                                </div>
                            </div>
                        </article>
                    @endif

                    @if(isset($news) && count($news) > 1)
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-7 gap-y-12">
                            @foreach($news as $index => $item)
                                @if($index === 0) @continue @endif
                                <article class="news-card">
                                    <a href="#" class="news-image block w-full h-[220px] rounded-lg overflow-hidden">
                                        <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" loading="lazy" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                    </a>
                                    <div class="pt-5">
                                        @if(!empty($item['date']))
                                            <div class="text-xs text-gray-400 font-medium mb-2">{{ $item['date'] }}</div>
                                        @endif
                                        <h3 class="text-lg md:text-xl font-bold text-[#00549a] line-clamp-2">
                                            <a href="#" class="hover:text-[#ff6500] transition-colors">{{ $item['title'] }}</a>
                                        </h3>
                                        <div class="mt-4">
                                            <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-[#00549a] hover:text-[#ff6500] transition-colors">
                                                <span>Xem thêm</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            @endforeach
                        </div>
                    @endif
                </div>

                {{-- TAB 2: GÓC BÁO CHÍ --}}
                <div id="tab-content-goc-bao-chi" class="media-tab-content hidden">
                    <article class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12 mb-14">
                        <div class="flex flex-col justify-center order-2 lg:order-1">
                            <span class="inline-flex w-fit items-center px-4 py-1.5 mb-4 text-xs font-bold uppercase tracking-wider text-white bg-[#00549a]">
                                Tin nổi bật
                            </span>
                            <h2 class="text-2xl md:text-3xl font-extrabold text-[#00549a] leading-tight">
                                Niềm tin của doanh nghiệp vào tầm nhìn phát triển mới của Đồng Tháp
                            </h2>
                            <p class="mt-4 text-gray-600 leading-relaxed">
                                Với phương châm “thành công của Quý doanh nghiệp, nhà đầu tư là thành công của tỉnh Đồng Tháp”, đại diện cộng đồng doanh nghiệp bày tỏ sự phấn khởi và kỳ vọng lớn trước những định hướng phát triển mang tính đột phá của tỉnh.
                            </p>
                            <div class="mt-6">
                                <a href="#" class="inline-flex items-center gap-2 font-semibold text-[#00549a] hover:text-[#ff6500] transition-colors">
                                    <span>Xem thêm</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                </a>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2">
                            <div class="w-full h-[280px] md:h-[360px] rounded-lg overflow-hidden shadow-md">
                                <img src="https://www.ttcgroup.vn/Data/Sites/1/News/10995/a%CC%89nh-ma%CC%80n-hi%CC%80nh-2026-06-01-lu%CC%81c-11.24.33.png" alt="Niềm tin doanh nghiệp" class="w-full h-full object-cover">
                            </div>
                        </div>
                    </article>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-7 gap-y-10">
                        @php
                            $pressNews = [
                                ['title' => 'Tập đoàn TTC và BIDV tăng cường hợp tác, thúc đẩy phát triển bền vững', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10946/1.jpg'],
                                ['title' => 'Pickleball D-Joy Tour 2026: Khẳng định vị thế quốc tế của thể thao Việt Nam', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10945/1.jpeg'],
                                ['title' => 'Tự lực, tự cường - “hệ xương sống” của tăng trưởng bền vững', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10894/ong-dang-hong-anh.-anh-quang-khanh.jpg'],
                                ['title' => 'Doanh nhân trẻ góp sức phát triển đất nước bằng hành động cụ thể', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10893/1.jpg'],
                                ['title' => 'Hội Doanh nhân trẻ Việt Nam tăng tốc kiến tạo giai đoạn phát triển mới', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10889/a%CC%89nh-ma%CC%80n-hi%CC%80nh-2026-01-26-lu%CC%81c-18.20.58.png'],
                                ['title' => 'Cơ chế "đồng hành" thúc đẩy kinh tế tư nhân phát triển', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10888/1.png'],
                            ];
                        @endphp
                        @foreach($pressNews as $item)
                            <article class="news-card bg-white rounded-lg border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                                <a href="#" class="block w-full h-[200px] overflow-hidden">
                                    <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                </a>
                                <div class="p-5">
                                    <h3 class="text-base md:text-lg font-bold text-[#00549a] line-clamp-2">
                                        <a href="#" class="hover:text-[#ff6500] transition-colors">{{ $item['title'] }}</a>
                                    </h3>
                                    <div class="mt-4">
                                        <a href="#" class="inline-flex items-center gap-2 text-sm font-semibold text-[#00549a] hover:text-[#ff6500] transition-colors">
                                            <span>Xem thêm</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- TAB 3: BẢN TIN TTC --}}
                <div id="tab-content-ban-tin-ttc" class="media-tab-content hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 md:gap-10">
                        @php
                            $newsletters = [
                                ['title' => 'Bản tin TTC Quý 2 năm 2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11014/606x867px.jpg'],
                                ['title' => 'Bản tin TTC Quý 1 năm 2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10956/606x867px.jpg'],
                                ['title' => 'Bản tin TTC Quý 4 năm 2025', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10875/606x867px.jpg'],
                                ['title' => 'Bản tin TTC Quý 3 năm 2025', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10822/606x867px.jpg'],
                                ['title' => 'Bản tin TTC Quý 2 năm 2025', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10761/606x867px_5.jpg'],
                                ['title' => 'Bản tin TTC Quý 1 năm 2025', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/10718/thumbnail371.jpg'],
                            ];
                        @endphp
                        @foreach($newsletters as $item)
                            <article class="news-figure group bg-white rounded-lg border border-gray-100 overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300">
                                <div class="img overflow-hidden aspect-[3/4] bg-slate-50">
                                    <a href="#" title="{{ $item['title'] }}" class="block w-full h-full">
                                        <img loading="lazy" src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                    </a>
                                </div>
                                <div class="p-5 text-center">
                                    <h3 class="headline font-bold text-lg text-[#00549a] group-hover:text-[#ff6500] transition-colors mb-3">
                                        <a href="#" title="{{ $item['title'] }}">{{ $item['title'] }}</a>
                                    </h3>
                                    <a class="inline-flex items-center justify-center gap-2 px-5 py-2 text-sm font-medium text-[#00549a] border border-[#00549a] rounded-full hover:bg-[#00549a] hover:text-white transition-colors" href="#">
                                        <span>Xem thêm</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M13 6l6 6-6 6"/></svg>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>

                {{-- TAB 4: THƯ VIỆN ẢNH --}}
                <div id="tab-content-thu-vien-anh" class="media-tab-content hidden">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @php
                            $galleries = [
                                ['title' => 'Lễ kỷ niệm 47 năm ngày hình thành Tập đoàn TTC', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11035/hdd_3543.jpg'],
                                ['title' => 'Khánh thành trạm dừng nghỉ TTC Châu Thành', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11045/279a1439.jpg'],
                                ['title' => 'Hội nghị sơ kết hoạt động 6 tháng đầu năm 2026', 'image' => 'https://www.ttcgroup.vn/Data/Sites/1/News/11034/28.279a9823.jpg'],
                            ];
                        @endphp
                        @foreach($galleries as $gallery)
                            <div class="relative rounded-lg overflow-hidden group shadow-md h-64 cursor-pointer">
                                <img src="{{ $gallery['image'] }}" alt="{{ $gallery['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent p-5 flex flex-col justify-end">
                                    <h4 class="text-white font-bold text-base leading-snug">{{ $gallery['title'] }}</h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- TAB 5: VIDEO --}}
                <div id="tab-content-video" class="media-tab-content hidden">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="rounded-lg overflow-hidden shadow-md bg-white border border-gray-100">
                            <div class="aspect-video bg-black flex items-center justify-center text-white">
                                <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="TTC Video" allowfullscreen></iframe>
                            </div>
                            <div class="p-4 font-bold text-[#00549a]">Phim tư liệu 45 năm hình thành và phát triển TTC Group</div>
                        </div>
                        <div class="rounded-lg overflow-hidden shadow-md bg-white border border-gray-100">
                            <div class="aspect-video bg-black flex items-center justify-center text-white">
                                <iframe class="w-full h-full" src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="TTC Video 2" allowfullscreen></iframe>
                            </div>
                            <div class="p-4 font-bold text-[#00549a]">Hệ sinh thái Nông nghiệp xanh TTC AgriS</div>
                        </div>
                    </div>
                </div>

                {{-- TAB 6: TÀI LIỆU KHÁC --}}
                <div id="tab-content-tai-lieu" class="media-tab-content hidden">
                    <div class="space-y-4 max-w-3xl mx-auto">
                        <div class="flex items-center justify-between p-5 bg-slate-50 rounded-lg border border-slate-200">
                            <div class="font-bold text-[#00549a]">Báo cáo thường niên TTC Group 2025</div>
                            <a href="#" class="px-4 py-2 bg-[#ff6500] text-white rounded text-sm font-semibold hover:bg-[#e05800]">Tải về PDF</a>
                        </div>
                        <div class="flex items-center justify-between p-5 bg-slate-50 rounded-lg border border-slate-200">
                            <div class="font-bold text-[#00549a]">Hồ sơ năng lực Tập đoàn TTC (Cap profile)</div>
                            <a href="#" class="px-4 py-2 bg-[#ff6500] text-white rounded text-sm font-semibold hover:bg-[#e05800]">Tải về PDF</a>
                        </div>
                    </div>
                </div>

                {{-- Pagination --}}
                <div class="flex justify-center items-center gap-2 mt-14 md:mt-16">
                    <button type="button" class="w-10 h-10 flex items-center justify-center border border-gray-200 text-gray-400 rounded cursor-default">‹</button>
                    <button type="button" class="w-10 h-10 flex items-center justify-center rounded bg-[#00549a] text-white font-semibold">1</button>
                    <button type="button" class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-[#00549a] hover:bg-[#00549a] hover:text-white transition-colors">2</button>
                    <button type="button" class="w-10 h-10 flex items-center justify-center rounded border border-gray-200 text-[#00549a] hover:bg-[#00549a] hover:text-white transition-colors">3</button>
                    <button type="button" class="w-10 h-10 flex items-center justify-center border border-gray-200 text-[#00549a] rounded hover:bg-[#00549a] hover:text-white transition-colors">›</button>
                </div>
            </div>
        </section>
    </main>


    {{-- Back to top --}}
    <button
        id="backToTop"
        type="button"
        class="back-top"
        aria-label="Lên đầu trang">

        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="w-5 h-5"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2">

            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M5 15l7-7 7 7"/>

        </svg>

    </button>

</div>


<script>
function switchMediaTab(tabId) {
    document.querySelectorAll('.media-tab-content').forEach(el => {
        el.classList.add('hidden');
        el.classList.remove('block');
    });
    const target = document.getElementById('tab-content-' + tabId);
    if (target) {
        target.classList.remove('hidden');
        target.classList.add('block');
    }

    document.querySelectorAll('.media-tab-btn').forEach(btn => {
        btn.classList.remove('text-[#ff6500]', 'border-[#ff6500]');
        btn.classList.add('text-gray-500', 'border-transparent');
    });

    const activeBtn = document.getElementById('tab-btn-' + tabId);
    if (activeBtn) {
        activeBtn.classList.remove('text-gray-500', 'border-transparent');
        activeBtn.classList.add('text-[#ff6500]', 'border-[#ff6500]');
    }
}

document.addEventListener('DOMContentLoaded', function () {

    const cards =
        document.querySelectorAll('.news-card');


    if (cards.length) {

        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(function (entry) {

                        if (entry.isIntersecting) {

                            entry.target.classList.remove(
                                'news-hidden'
                            );

                            entry.target.classList.add(
                                'news-visible'
                            );

                            observer.unobserve(
                                entry.target
                            );

                        }

                    });

                },
                {
                    threshold: 0.08
                }
            );


        cards.forEach(function (card) {

            observer.observe(card);

        });

    }


    const backToTop =
        document.getElementById('backToTop');


    if (backToTop) {

        window.addEventListener(
            'scroll',
            function () {

                if (window.scrollY > 500) {

                    backToTop.classList.add('show');

                } else {

                    backToTop.classList.remove('show');

                }

            },
            {
                passive: true
            }
        );


        backToTop.addEventListener(
            'click',
            function () {

                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });

            }
        );

    }


    const tabScroll =
        document.querySelector('.tab-scroll');


    if (tabScroll) {

        const activeTab =
            tabScroll.querySelector(
                'a.text-\\[\\#ff6500\\]'
            );


        if (
            activeTab &&
            window.innerWidth < 768
        ) {

            activeTab.scrollIntoView({
                behavior: 'instant',
                block: 'nearest',
                inline: 'center'
            });

        }

    }

});
</script>

@endsection