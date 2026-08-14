@extends('layouts.app')

@section('title', 'Lĩnh vực hoạt động - Tập đoàn TTC')

@section('description', 'Tập đoàn TTC hoạt động trên 6 lĩnh vực: Nông nghiệp, Năng lượng, Bất động sản, BĐS Công nghiệp, Du lịch và Giáo dục.')

@section('content')

<style>
    .sector-card {
        opacity: 0;
        transform: translateY(70px);
        transition:
            opacity 0.85s ease,
            transform 0.85s ease;
    }

    .sector-card.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .sector-card img {
        will-change: transform;
    }

    .sector-card:hover img {
        transform: scale(1.05);
    }

    .sector-content {
        opacity: 0;
        transform: translateY(25px);
        transition:
            opacity 0.7s ease 0.15s,
            transform 0.7s ease 0.15s;
    }

    .sector-card.is-visible .sector-content {
        opacity: 1;
        transform: translateY(0);
    }

    .sector-number {
        opacity: 0;
        transform: translateY(15px);
        transition:
            opacity 0.5s ease,
            transform 0.5s ease;
    }

    .sector-card.is-visible .sector-number {
        opacity: 1;
        transform: translateY(0);
    }

    .sector-card:nth-child(1) .sector-number {
        transition-delay: .25s;
    }

    .sector-card:nth-child(2) .sector-number {
        transition-delay: .35s;
    }

    .sector-card:nth-child(3) .sector-number {
        transition-delay: .45s;
    }

    .sector-card:nth-child(4) .sector-number {
        transition-delay: .55s;
    }

    .sector-card:nth-child(5) .sector-number {
        transition-delay: .65s;
    }

    .sector-card:nth-child(6) .sector-number {
        transition-delay: .75s;
    }

    .sector-line {
        width: 0;
        transition: width 0.7s ease 0.3s;
    }

    .sector-card.is-visible .sector-line {
        width: 55px;
    }

    .sector-button {
        transition:
            background-color 0.3s ease,
            color 0.3s ease,
            transform 0.3s ease;
    }

    .sector-button:hover {
        transform: translateX(5px);
    }

    @media (max-width: 1023px) {
        .sector-card {
            min-height: auto;
        }
    }

    @media (max-width: 640px) {
        .sector-card {
            transform: translateY(45px);
        }

        .sector-card h2 {
            font-size: 28px;
        }

        .sector-card p {
            font-size: 14px;
            line-height: 1.8;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .sector-card,
        .sector-content,
        .sector-number,
        .sector-line {
            opacity: 1;
            transform: none;
            transition: none;
            width: auto;
        }

        .sector-card img {
            transition: none;
        }
    }
</style>



<!--    BREADCRUMB -->


<div class="border-b border-gray-100 bg-white">

    <div
        class="max-w-[1280px] mx-auto px-5 md:px-8 py-4"
    >

        <nav class="flex items-center gap-2 text-sm">

            <a
                href="{{ route('home') }}"
                class="text-gray-400
                       hover:text-[#00549a]
                       transition-colors"
            >
                Trang chủ
            </a>

            <span class="text-gray-300">
                /
            </span>

            <span class="font-medium text-[#00549a]">
                Lĩnh vực hoạt động
            </span>

        </nav>

    </div>

</div>

<!--   data -->

@php

$sectors = [

    [
        'id' => 'nong-nghiep',
        'title' => 'Nông nghiệp',
        'brand' => 'TTC AGRIS',
        'image' => 'images/ttc/agriculture.jpg',
        'route' => 'business.agriculture',

        'desc' => 'TTC AgriS (tiền thân là Thành Thành Công — Biên Hòa, SBT) là doanh nghiệp hàng đầu Việt Nam trong lĩnh vực sản xuất và kinh doanh đường, đồng thời phát triển chuỗi giá trị nông nghiệp tuần hoàn bền vững với năng lực sản xuất hơn 1 triệu tấn đường mỗi năm.',

        'highlights' => [
            [
                'value' => '1M+',
                'label' => 'Tấn đường/năm'
            ],
            [
                'value' => '50+',
                'label' => 'Quốc gia xuất khẩu'
            ],
            [
                'value' => '80.000 ha',
                'label' => 'Vùng nguyên liệu'
            ],
        ],
    ],

    [
        'id' => 'nang-luong',
        'title' => 'Năng lượng',
        'brand' => 'GEC',
        'image' => 'images/ttc/energy.jpg',
        'route' => 'business.energy',

        'desc' => 'Công ty CP Điện Gia Lai (GEC, HOSE: GEG) là đơn vị chủ lực của ngành Năng lượng TTC, gia nhập Sở Giao dịch Chứng khoán TP.HCM từ tháng 8/2019. GEC phát triển năng lượng sạch vi môi trường xanh, với gần 40 năm kinh nghiệm trong lĩnh vực năng lượng tái tạo.',

        'highlights' => [
            [
                'value' => '24',
                'label' => 'Nhà máy thủy điện, điện mặt trời và điện gió'
            ],
            [
                'value' => '800 MWP',
                'label' => 'Tổng công suất'
            ],
            [
                'value' => '> 4,45 triệu tấn',
                'label' => 'CO2 được giảm phát thải'
            ],
        ],
    ],

    [
        'id' => 'bat-dong-san',
        'title' => 'Bất động sản',
        'brand' => 'TTC LAND',
        'image' => 'images/ttc/hero-3.jpg',
        'route' => 'business.real_estate',

        'desc' => 'TTC Land là đơn vị thành viên chuyên phát triển bất động sản của Tập đoàn TTC, với danh mục đa dạng từ căn hộ, nhà phố, biệt thự đến khu đô thị hiện đại. Với tầm nhìn kiến tạo không gian sống đẳng cấp, TTC Land không ngừng đầu tư vào thiết kế, tiện ích và hạ tầng.',

        'highlights' => [
            [
                'value' => '30+',
                'label' => 'Dự án triển khai'
            ],
            [
                'value' => '500 ha',
                'label' => 'Quỹ đất'
            ],
            [
                'value' => '10.000+',
                'label' => 'Sản phẩm bàn giao'
            ],
        ],
    ],

    [
        'id' => 'bat-dong-san-cong-nghiep',
        'title' => 'Bất động sản Công nghiệp',
        'brand' => 'TTC INDUSTRIAL',
        'image' => 'images/ttc/industrial.jpg',
        'route' => 'business.industrial',

        'desc' => 'TTC Industrial là đơn vị phát triển bất động sản công nghiệp thuộc Tập đoàn TTC, chuyên cung cấp hạ tầng khu công nghiệp, nhà xưởng xây sẵn và dịch vụ kho bãi logistics đạt chuẩn quốc tế tại các vị trí chiến lược.',

        'highlights' => [
            [
                'value' => '500+ ha',
                'label' => 'Tổng diện tích KCN'
            ],
            [
                'value' => '95%',
                'label' => 'Tỷ lệ lấp đầy'
            ],
            [
                'value' => '50+',
                'label' => 'Doanh nghiệp thuê'
            ],
        ],
    ],

    [
        'id' => 'du-lich',
        'title' => 'Du lịch',
        'brand' => 'TTC HOSPITALITY',
        'image' => 'images/ttc/hospitality.jpg',
        'route' => 'business.hospitality',

        'desc' => 'TTC Hospitality là thương hiệu du lịch và nghỉ dưỡng hàng đầu thuộc Tập đoàn TTC, sở hữu chuỗi khách sạn và resort cao cấp tại nhiều điểm đến nổi tiếng trên cả nước. Mang đến trải nghiệm nghỉ dưỡng sang trọng và dịch vụ chuyên nghiệp.',

        'highlights' => [
            [
                'value' => '15+',
                'label' => 'Khách sạn & Resort'
            ],
            [
                'value' => '3.000+',
                'label' => 'Phòng lưu trú'
            ],
            [
                'value' => '2M+',
                'label' => 'Lượt khách/năm'
            ],
        ],
    ],

    [
        'id' => 'giao-duc',
        'title' => 'Giáo dục',
        'brand' => 'TTC EDUCATION',
        'image' => 'images/ttc/education.jpg',
        'route' => 'business.education',

        'desc' => 'TTC Education là hệ thống giáo dục liên cấp thuộc Tập đoàn TTC, cung cấp chương trình đào tạo từ mầm non, tiểu học, trung học đến đại học với chuẩn quốc tế. Đại học Yersin là thành viên chiến lược trong lĩnh vực giáo dục đại học.',

        'highlights' => [
            [
                'value' => '5+',
                'label' => 'Cơ sở giáo dục'
            ],
            [
                'value' => '10.000+',
                'label' => 'Học sinh sinh viên'
            ],
            [
                'value' => '500+',
                'label' => 'Giảng viên & GV'
            ],
        ],
    ],

];

@endphp

<!--     SECTORS -->

<section class="bg-white">

    <div class="max-w-[1280px] mx-auto px-5 md:px-8">

        @foreach($sectors as $i => $s)

            @php
                $reverse = $i % 2 === 1;
            @endphp

            <article
                class="
                    sector-card
                    group
                    grid
                    grid-cols-1
                    lg:grid-cols-2
                    min-h-[500px]
                    overflow-hidden
                    border-b
                    border-gray-100
                    py-10
                    lg:py-14
                "
            >

              
                <div
                    class="
                        relative
                        min-h-[320px]
                        lg:min-h-[500px]
                        overflow-hidden
                        {{ $reverse ? 'lg:order-2' : 'lg:order-1' }}
                    "
                >

                    <div
                        class="absolute inset-0
                               overflow-hidden
                               rounded-[20px]"
                    >

                        <img
                            src="{{ str_starts_with($s['image'], 'http')
                                ? $s['image']
                                : asset($s['image']) }}"
                            alt="{{ $s['title'] }}"
                            loading="lazy"
                            class="
                                w-full
                                h-full
                                object-cover
                                transition-transform
                                duration-[1200ms]
                                ease-out
                            "
                        >

                        <div
                            class="
                                absolute
                                inset-0
                                bg-gradient-to-t
                                from-black/20
                                via-transparent
                                to-transparent
                            "
                        ></div>

                    </div>

                </div>


               
                <div
                    class="
                        sector-content
                        flex
                        flex-col
                        justify-center

                        px-2
                        py-10

                        lg:px-14
                        xl:px-20
                        lg:py-12

                        {{ $reverse ? 'lg:order-1' : 'lg:order-2' }}
                    "
                >

                   
                    <p
                        class="
                            mb-3
                            text-xs
                            font-bold
                            uppercase
                            tracking-[.22em]
                            text-[#00549a]
                        "
                    >
                        {{ $s['brand'] }}
                    </p>


                    
                    <h2
                        class="
                            relative
                            mb-7
                            text-3xl
                            md:text-4xl
                            font-bold
                            leading-tight
                            text-[#00549a]
                        "
                    >

                        {{ $s['title'] }}

                        <span
                            class="
                                sector-line
                                absolute
                                -bottom-3
                                left-0
                                block
                                h-[3px]
                                bg-[#ff6500]
                            "
                        ></span>

                    </h2>


                   
                    <p
                        class="
                            max-w-[600px]
                            text-[15px]
                            leading-8
                            text-slate-600
                        "
                    >
                        {{ $s['desc'] }}
                    </p>


                    
                    <div
                        class="
                            mt-9
                            grid
                            grid-cols-2
                            sm:grid-cols-3
                            gap-x-8
                            gap-y-7
                        "
                    >

                        @foreach($s['highlights'] as $h)

                            <div class="sector-number">

                                <span
                                    class="
                                        block
                                        text-2xl
                                        md:text-3xl
                                        font-extrabold
                                        leading-none
                                        text-[#00549a]
                                    "
                                >
                                    {{ $h['value'] }}
                                </span>

                                <span
                                    class="
                                        mt-2
                                        block
                                        max-w-[160px]
                                        text-xs
                                        leading-5
                                        text-slate-500
                                    "
                                >
                                    {{ $h['label'] }}
                                </span>

                            </div>

                        @endforeach

                    </div>


                   
                    <div class="mt-9">

                        <a
                            href="{{ route($s['route']) }}"
                            class="
                                sector-button
                                inline-flex
                                items-center
                                gap-3
                                text-sm
                                font-bold
                                text-[#00549a]
                                group/link
                            "
                        >

                            <span
                                class="
                                    border-b
                                    border-[#00549a]
                                    pb-1
                                    transition-colors
                                    duration-300
                                    group-hover/link:border-[#ff6500]
                                    group-hover/link:text-[#ff6500]
                                "
                            >
                                Xem chi tiết
                            </span>


                            <span
                                class="
                                    flex
                                    h-9
                                    w-9
                                    items-center
                                    justify-center
                                    rounded-full
                                    bg-[#00549a]
                                    text-white
                                    transition-all
                                    duration-300
                                    group-hover/link:bg-[#ff6500]
                                "
                            >

                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M5 12h14"
                                    />

                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="m13 6 6 6-6 6"
                                    />

                                </svg>

                            </span>

                        </a>

                    </div>

                </div>

            </article>

        @endforeach

    </div>

</section>



<script>
document.addEventListener('DOMContentLoaded', function () {

    const sectorCards =
        document.querySelectorAll('.sector-card');

    if (!sectorCards.length) {
        return;
    }


    const observer =
        new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add(
                            'is-visible'
                        );

                    } else {

                        entry.target.classList.remove(
                            'is-visible'
                        );

                    }

                });

            },
            {
                threshold: 0.15,
                rootMargin: '0px 0px -80px 0px'
            }
        );


    sectorCards.forEach(function (card) {

        observer.observe(card);

    });

});
</script>


@endsection