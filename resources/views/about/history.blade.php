@extends('layouts.app')

@section('title', 'Lịch sử hình thành và phát triển | TTC Group')

@section('content')

<style>
   

    .history-item {
        opacity: 0;
        transform: translateY(70px);
        transition:
            opacity 0.85s ease,
            transform 0.85s ease;
    }

    .history-item.is-visible {
        opacity: 1;
        transform: translateY(0);
    }

    .history-content {
        opacity: 0;
        transform: translateY(25px);
        transition:
            opacity 0.7s ease 0.15s,
            transform 0.7s ease 0.15s;
    }

    .history-item.is-visible .history-content {
        opacity: 1;
        transform: translateY(0);
    }

    .history-year {
        opacity: 0;
        transform: scale(.85);
        transition:
            opacity 0.5s ease,
            transform 0.5s ease;
    }

    .history-item.is-visible .history-year {
        opacity: 1;
        transform: scale(1);
    }

    .history-dot {
        transform: scale(.5);
        opacity: .3;
        transition:
            transform .55s ease,
            opacity .55s ease,
            box-shadow .55s ease;
    }

    .history-item.is-visible .history-dot {
        transform: scale(1);
        opacity: 1;
        box-shadow: 0 0 0 7px rgba(255, 101, 0, .12);
    }

    .history-line {
        transform: scaleY(0);
        transform-origin: top;
        transition: transform 1s ease;
    }

    .history-line.is-active {
        transform: scaleY(1);
    }

    @media (max-width: 767px) {

        .history-line {
            left: 15px;
            transform-origin: top;
        }

        .history-item {
            transform: translateY(45px);
        }
    }

    @media (prefers-reduced-motion: reduce) {

        .history-item,
        .history-content,
        .history-year,
        .history-dot,
        .history-line {
            opacity: 1;
            transform: none;
            transition: none;
        }
    }
</style>





<div class="border-b border-gray-100 bg-white">

    <div
        class=" max-w-[1280px]  mx-auto px-5 md:px-8  py-4  " >

        <nav class="flex items-center gap-2 text-sm">

            <a
                href="{{ route('home') }}"
                class="  text-gray-400  hover:text-[#00549a]  transition-colors  " >
                Trang chủ
            </a>

            <span class="text-gray-300">
                /
            </span>

            <a
                href="{{ route('about') }}"
                class=" text-gray-400 hover:text-[#00549a] transition-colors  " >
                Giới thiệu
            </a>

            <span class="text-gray-300">
                /
            </span>

            <span class="font-medium text-[#00549a]">
                Lịch sử hình thành và phát triển
            </span>

        </nav>

    </div>

</div>

@php

$milestones = [

    [
        'year' => 2025,
        'text' => 'Với “Chiến lược mới trên Đường đua mới” và cũng là năm cuối của chiến lược 5 năm, Tập đoàn TTC tiếp tục hành trình chuyển đổi giai đoạn 2025 - 2030 với quyết tâm: Giữ vững củng cố nền tảng, hiện đại hóa quản trị, tối ưu hóa mô hình vận hành và nâng cao chất lượng sản phẩm cũng như trải nghiệm khách hàng.'
    ],
    [
        'year' => 2024,
        'text' => 'Cột mốc đánh dấu 45 năm hình thành và phát triển Tập đoàn TTC (28/7/1979 - 28/7/2024).'
    ],
    [
        'year' => 2023,
        'text' => 'Năm 2023, Tập đoàn TTC tiếp tục phát triển năm thứ 44 với tinh thần “Đổi mới - Chuyên nghiệp - Trách nhiệm”. Toàn thể cán bộ nhân viên các cấp trong Tập đoàn cam kết cùng nhau thực thi một năm với năng lượng, tinh thần tích cực và quyết tiến để hoàn thành mọi kế hoạch được giao.'
    ],
    [
        'year' => 2022,
        'text' => 'Trên nền tảng chặng đường phát triển đã qua, đến nay, TTC đã khẳng định thương hiệu và củng cố vị thế thông qua những chỉ số tăng trưởng đầy tiềm năng, đồng thời nỗ lực chinh phục chiến lược phát triển 5 năm 2021 - 2025 và tầm nhìn đến 2030.'
    ],
    [
        'year' => 2021,
        'text' => 'Đây là năm đầu tiên của giai đoạn thực thi chiến lược phát triển 5 năm 2021 - 2025 của toàn Tập đoàn, đây cũng là năm xây dựng nền tảng quan trọng cho quá trình phát triển dài hạn phía trước. Kết thúc năm 2021: Vốn điều lệ toàn Tập đoàn đạt 20.269 tỷ đồng; Vốn chủ sở hữu đạt 25.480 tỷ đồng; Tổng tài sản đạt 80.349 tỷ đồng; Doanh thu thuần đạt 33.774 tỷ đồng, Lợi nhuận trước thuế đạt 1.898 tỷ đồng và Tổng mức đóng góp ngân sách nhà nước đạt 1.006 tỷ đồng.'
    ],
    [
        'year' => 2020,
        'text' => 'TTC tăng tốc để bứt phá hoàn thành mục tiêu đề ra của chiến lược phát triển 2016 - 2020, hướng đến chiến lược phát triển 2021 - 2025. Kết thúc năm 2020: Vốn điều lệ: 19.395 tỷ đồng, Vốn chủ sở hữu: 24.777 tỷ đồng, Tổng tài sản: 72.349 tỷ đồng, Doanh thu thuần: 31.576 tỷ đồng, Lợi nhuận trước thuế: 1.742 tỷ đồng.'
    ],
    [
        'year' => 2019,
        'text' => 'Đánh dấu cột mốc 40 năm hình thành và phát triển, đồng thời tái cấu trúc thương hiệu theo chiến lược phát triển Tập đoàn chú trọng vào 4 ngành chủ lực.'
    ],
    [
        'year' => 2018,
        'text' => 'TTC tiếp tục hoàn thiện mô hình Tập đoàn với hoạt động của 04 Tổng công ty Ngành, 1 Ủy ban Ngành và các Khối chức năng Tập đoàn; Chuẩn hóa cấu trúc thương hiệu của từng Ngành.'
    ],
    [
        'year' => 2017,
        'text' => 'Hoàn thiện quá trình chuyển đổi và chính thức vận hành theo mô hình Tổng Công ty. Quy mô Tập đoàn TTC năm 2017: 1 công ty hạt nhân, 4 Tổng công ty Ngành, 1 Ủy ban Ngành với hơn 150 đơn vị trực thuộc trong và ngoài nước, trên 10.000 cán bộ nhân viên. Vốn điều lệ: 14.378 tỉ đồng, Vốn chủ sở hữu: 17.783 tỉ đồng, Tổng tài sản: 49.305 tỉ đồng, Lợi nhuận trước thuế: 1.489 tỉ đồng.'
    ],
    [
        'year' => 2016,
        'text' => 'Bắt đầu chuyển đổi hoạt động theo mô hình Tổng Công ty Ngành: Bất động sản, Năng lượng, Mía đường, Du lịch và Giáo dục.'
    ],
    [
        'year' => 2015,
        'text' => 'Quy mô vốn Tập đoàn TTC tính đến 31/12/2015: Vốn điều lệ 11.371 tỷ đồng, doanh thu thuần 15.405 tỷ đồng, lợi nhuận trước thuế 1.114 tỷ đồng. Các công ty thành viên được Tập đoàn sở hữu vốn chi phối. Hoạt động gồm 5 lĩnh vực chủ chốt: Bất động sản, Năng lượng, Nông nghiệp, Giáo dục, Du lịch với 21 công ty thành viên.'
    ],
    [
        'year' => 2014,
        'text' => 'Tiếp tục khẳng định sự lớn mạnh của TTC với số công ty thành viên (CTTV) chính thức là 19 công ty, 03 công ty liên kết và công ty hạt nhân Đầu tư Thành Thành Công. Tổng đóng góp ngân sách năm 2014 đạt gần 500 tỷ đồng. Các đơn vị thành viên của TTC trải dài từ các tỉnh miền Trung, Cao nguyên đến miền Tây, miền Đông Nam Bộ.'
    ],
    [
        'year' => 2013,
        'text' => 'Công bố hệ thống nhận diện thương hiệu mới của Tập đoàn, với 19 công ty thành viên.'
    ],
    [
        'year' => 2012,
        'text' => 'Tăng danh mục đầu tư hơn 60 Công ty.'
    ],
    [
        'year' => 2011,
        'text' => 'Thành lập Tập đoàn TTC, vốn điều lệ tăng hơn 3000 tỷ đồng. Với sáu đơn vị thành viên: Mía đường Thành Thành Công Tây Ninh (tên cũ là Bourbon Tây Ninh), Đường Ninh Hòa, Thương mại Thành Thành Công, Đặng Huỳnh, Thành Ngọc.'
    ],
    [
        'year' => 2010,
        'text' => 'Tăng vốn điều lệ lên 1.000 tỷ đồng.'
    ],
    [
        'year' => 2008,
        'text' => 'Danh mục đầu tư tăng 20 lần so với 2004.'
    ],
    [
        'year' => 2007,
        'text' => 'Tham gia chương trình cổ phần hóa và đầu tư danh mục. Tăng vốn điều lệ lên 500 tỷ đồng.'
    ],
    [
        'year' => 2006,
        'text' => 'Tăng vốn điều lệ lên 50 tỷ đồng.'
    ],
    [
        'year' => 2004,
        'text' => 'Phát triển cụm kho tại khu công nghiệp Sóng Thần - Bình Dương.'
    ],

    [
        'year' => 2002,
        'text' => 'Xây dựng hệ thống giao dịch mật rỉ và vận tải Đồng Nai.'
    ],

    [
        'year' => 2001,
        'text' => 'Xây dựng hệ thống kho bãi tại khu công nghiệp Tân Bình. Tăng vốn điều lệ lên 25 tỷ đồng.'
    ],

    [
        'year' => 1998,
        'text' => 'Chuyển đổi thành Công ty TNHH TM - SX Thành Thành Công. Công ty ưu tiên phát triển hệ thống phân phối trải rộng cả nước, đặc biệt tại các thị trường trọng điểm như: Thành phố Hồ Chí Minh, Đồng Nai, Tiền Giang, Bến Tre, Tây Ninh… Đây chính là bước đệm giúp Công ty hội tụ đủ nguồn lực để tham gia đầu tư vào các lĩnh vực mới đầy tiềm năng như: mía đường, ngân hàng, bất động sản, du lịch.'
    ],

    [
        'year' => 1979,
        'text' => 'Tiền thân của Tập đoàn TTC là cơ sở sản xuất cồn được thành lập bởi hai nhà sáng lập Ông Đặng Văn Thành và Bà Huỳnh Bích Ngọc. Tại thời điểm đó, với vốn điều lệ 100 triệu đồng và 20 cán bộ nhân viên, Thành Thành Công là một trong những cơ sở sản xuất cồn có quy mô lớn nhất ở Thành phố Hồ Chí Minh.'
    ],

];

@endphp

<!--lịch sử -->   

<section class="bg-white">

    <div
        class="max-w-[1100px] mx-auto px-5 md:px-8 py-16 md:py-24">
        <div
            class="text-center mb-16 md:mb-24">

            <p
                class=" text-xs  font-bold uppercase  tracking-[.25em]  text-[#ff6500] " >
                TTC GROUP
            </p>

            <h2 class="   mt-3 text-3xl  md:text-4xl font-bold  text-[#00549a] " >
                Lịch sử hình thành và phát triển
            </h2>

            <div class=" mx-auto  mt-5 h-[3px]  w-12  bg-[#ff6500]  " ></div>

        </div>

<!--TIMELINE -->    
        
        <div id="historyTimeline" class=" relative  pb-10 " >

            
            <div class="  history-line  absolute  top-0 bottom-0  left-1/2  hidden  w-[2px] -translate-x-1/2  bg-[#ff6500]/35  md:block " ></div>


          
            <div
                class=" absolute  top-0 bottom-0 left-[15px] w-[2px]  bg-[#ff6500]/35 md:hidden ">
            </div>


            @foreach($milestones as $i => $item)

                @php
                    $left = $i % 2 === 0;
                @endphp


                <div class=" history-item  relative  mb-16  md:mb-20  last:mb-0    " >

                
                    <div  class="  hidden  md:grid md:grid-cols-[1fr_70px_1fr]  items-start " >

 <!-- LEFT -->                        
                        <div
                            class="
                                {{ $left ? 'text-right pr-10' : 'pr-10' }}
                            "
                        >

                            @if($left)

                                <div class="history-content">

                                    <span class=" history-year  inline-block  text-4xl lg:text-5xl font-extrabold text-[#00549a] " >
                                        {{ $item['year'] }}
                                    </span>

                                    <div  class=" mt-4 ml-auto  max-w-[460px] text-[15px]  leading-8 text-slate-600 " >
                                        {{ $item['text'] }}
                                    </div>

                                    <div class=" mt-5 ml-auto h-[3px] w-10  bg-[#ff6500] ">

                                    </div>

                                </div>

                            @endif

                        </div>

<!-- CENTER  -->
                        
                        <div
                            class=" relative  flex justify-center  " >

                            <div class="  history-dot relative  z-10  mt-1  h-5  w-5 rounded-full  bg-[#ff6500]  border-4  border-white  "></div>

                        </div>


 <!-- RIGHT  -->                      
                        <div
                            class="
                                {{ !$left ? 'pl-10' : 'pl-10' }}
                            "
                        >

                            @if(!$left)

                                <div class="history-content">

                                    <span class=" history-year inline-block text-4xl lg:text-5xl font-extrabold text-[#00549a]  " >
                                        {{ $item['year'] }}
                                    </span>

                                    <div class=" mt-4 max-w-[460px]  text-[15px] leading-8 text-slate-600">
                                        {{ $item['text'] }}
                                    </div>

                                    <div class="  mt-5  h-[3px]  w-10 bg-[#ff6500]">
                                     </div>

                                </div>

                            @endif

                        </div>

                    </div>

<!-- MOBILE  -->   
                    
                    <div class="relative  pl-12  md:hidden ">

                        <div class="  history-dot  absolute left-[6px] top-1  z-10   h-5  w-5  rounded-full bg-[#ff6500] border-4  border-white " >
                        </div>


                        <div class="history-content">

                            <span class=" history-year  inline-block  text-3xl font-extrabold text-[#00549a]  " >
                                {{ $item['year'] }}
                            </span>

                            <div  class="mt-4 text-[14px] leading-7 text-slate-600 ">
                                {{ $item['text'] }}
                            </div>

                            <div class="mt-5 h-[3px] w-10 bg-[#ff6500]">
                            </div>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const items = document.querySelectorAll('.history-item');
    const line = document.querySelector('.history-line');

    if (!items.length) {
        return;
    }


    const observer = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    entry.target.classList.add('is-visible');

                } else {

                    entry.target.classList.remove('is-visible');

                }

            });

        },
        {
            threshold: 0.15,
            rootMargin: '0px 0px -80px 0px'
        }
    );


    items.forEach(function (item) {

        observer.observe(item);

    });


    if (line) {

        const lineObserver = new IntersectionObserver(
            function (entries) {

                entries.forEach(function (entry) {

                    if (entry.isIntersecting) {

                        line.classList.add('is-active');

                    } else {

                        line.classList.remove('is-active');

                    }

                });

            },
            {
                threshold: 0.05
            }
        );

        lineObserver.observe(
            document.querySelector('#historyTimeline')
        );

    }

});
</script>


@endsection