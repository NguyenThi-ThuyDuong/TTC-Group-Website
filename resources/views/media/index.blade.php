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
                <div
                    class="tab-scroll
                           overflow-x-auto
                           border-b border-gray-200
                           mb-10 md:mb-14">

                    <div
                        class="flex
                               items-center
                               justify-start
                               md:justify-center
                               gap-7 md:gap-10
                               min-w-max">


                        {{-- Tin tức TTC --}}
                        <a
                            href="{{ route('media') }}"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#ff6500]
                                   border-b-2
                                   border-[#ff6500]
                                   whitespace-nowrap">

                            Tin tức TTC

                        </a>


                        {{-- Góc báo chí --}}
                        <a
                            href="#"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#00549a]
                                   hover:text-[#ff6500]
                                   whitespace-nowrap
                                   transition-colors">

                            Góc báo chí

                        </a>


                        {{-- Bản tin TTC --}}
                        <a
                            href="#"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#00549a]
                                   hover:text-[#ff6500]
                                   whitespace-nowrap
                                   transition-colors">

                            Bản tin TTC

                        </a>


                        {{-- Thư viện ảnh --}}
                        <a
                            href="#"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#00549a]
                                   hover:text-[#ff6500]
                                   whitespace-nowrap
                                   transition-colors">

                            Thư viện ảnh

                        </a>


                        {{-- Video --}}
                        <a
                            href="#"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#00549a]
                                   hover:text-[#ff6500]
                                   whitespace-nowrap
                                   transition-colors">

                            Video

                        </a>


                        {{-- Tài liệu khác --}}
                        <a
                            href="#"
                            class="pb-4
                                   text-sm md:text-base
                                   font-semibold
                                   text-[#00549a]
                                   hover:text-[#ff6500]
                                   whitespace-nowrap
                                   transition-colors">

                            Tài liệu khác

                        </a>

                    </div>

                </div>


                {{-- Featured News --}}
                @if(isset($news[0]))

                    @php
                        $featured = $news[0];
                    @endphp

                    <article
                        class="grid
                               grid-cols-1
                               lg:grid-cols-2
                               gap-8
                               lg:gap-12
                               mb-14 md:mb-20">


                        {{-- Featured content --}}
                        <div
                            class="flex
                                   flex-col
                                   justify-center
                                   order-2
                                   lg:order-1">


                            <span
                                class="inline-flex
                                       w-fit
                                       items-center
                                       px-4 py-2
                                       mb-5
                                       text-xs
                                       font-bold
                                       uppercase
                                       tracking-wide
                                       text-white
                                       bg-[#00549a]">

                                Tin nổi bật

                            </span>


                            <h2
                                class="text-2xl
                                       md:text-3xl
                                       lg:text-[32px]
                                       leading-tight
                                       font-extrabold
                                       text-[#00549a]">

                                {{ $featured['title'] }}

                            </h2>


                            @if(!empty($featured['summary']))

                                <p
                                    class="mt-5
                                           text-base
                                           md:text-lg
                                           leading-relaxed
                                           text-gray-600">

                                    {{ $featured['summary'] }}

                                </p>

                            @endif


                            <div class="mt-7">

                                <a
                                    href="#"
                                    class="inline-flex
                                           items-center
                                           gap-3
                                           font-semibold
                                           text-[#00549a]
                                           hover:text-[#ff6500]
                                           transition-colors">

                                    <span>
                                        Xem thêm
                                    </span>

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.8">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12h14M13 6l6 6-6 6"/>

                                    </svg>

                                </a>

                            </div>

                        </div>


                        {{-- Featured image --}}
                        <div
                            class="order-1 lg:order-2">

                            <div
                                class="featured-image
                                       w-full
                                       h-[260px]
                                       md:h-[360px]
                                       lg:h-[430px]">

                                <img
                                    src="{{ $featured['image'] }}"
                                    alt="{{ $featured['title'] }}"
                                    loading="eager">

                            </div>

                        </div>

                    </article>

                @endif


                {{-- News Grid --}}
                @if(isset($news) && count($news) > 1)

                    <div
                        class="grid
                               grid-cols-1
                               sm:grid-cols-2
                               lg:grid-cols-3
                               gap-x-7
                               gap-y-12">


                        @foreach($news as $index => $item)

                            @if($index === 0)
                                @continue
                            @endif


                            <article
                                class="news-card news-hidden">


                                {{-- Image --}}
                                <a
                                    href="#"
                                    class="news-image
                                           block
                                           w-full
                                           h-[210px]
                                           md:h-[220px]
                                           lg:h-[230px]">

                                    <img
                                        src="{{ $item['image'] }}"
                                        alt="{{ $item['title'] }}"
                                        loading="lazy">

                                </a>


                                {{-- Content --}}
                                <div class="pt-5">


                                    @if(!empty($item['date']))

                                        <div
                                            class="text-xs
                                                   text-gray-400
                                                   font-medium
                                                   mb-3">

                                            {{ $item['date'] }}

                                        </div>

                                    @endif


                                    <h3
                                        class="text-lg
                                               md:text-xl
                                               leading-snug
                                               font-bold
                                               text-[#00549a]">

                                        <a
                                            href="#"
                                            class="hover:text-[#ff6500]
                                                   transition-colors">

                                            {{ $item['title'] }}

                                        </a>

                                    </h3>


                                    <div class="mt-4">

                                        <a
                                            href="#"
                                            class="inline-flex
                                                   items-center
                                                   gap-2
                                                   text-sm
                                                   font-semibold
                                                   text-[#00549a]
                                                   hover:text-[#ff6500]
                                                   transition-colors">

                                            <span>
                                                Xem thêm
                                            </span>

                                            <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                class="w-4 h-4"
                                                fill="none"
                                                viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                stroke-width="2">

                                                <path
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    d="M5 12h14M13 6l6 6-6 6"/>

                                            </svg>

                                        </a>

                                    </div>

                                </div>

                            </article>

                        @endforeach

                    </div>

                @else

                    <div
                        class="py-20
                               text-center
                               text-gray-500">

                        Chưa có tin tức.

                    </div>

                @endif


                {{-- Pagination --}}
                <div
                    class="flex
                           justify-center
                           items-center
                           gap-2
                           mt-14 md:mt-16">


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               border border-gray-200
                               text-gray-400
                               rounded
                               cursor-default">

                        ‹

                    </button>


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded
                               bg-[#00549a]
                               text-white
                               font-semibold">

                        1

                    </button>


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded
                               border border-gray-200
                               text-[#00549a]
                               hover:bg-[#00549a]
                               hover:text-white
                               transition-colors">

                        2

                    </button>


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded
                               border border-gray-200
                               text-[#00549a]
                               hover:bg-[#00549a]
                               hover:text-white
                               transition-colors">

                        3

                    </button>


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               rounded
                               border border-gray-200
                               text-[#00549a]
                               hover:bg-[#00549a]
                               hover:text-white
                               transition-colors">

                        4

                    </button>


                    <button
                        type="button"
                        class="w-10 h-10
                               flex items-center justify-center
                               border border-gray-200
                               text-[#00549a]
                               rounded
                               hover:bg-[#00549a]
                               hover:text-white
                               transition-colors">

                        ›

                    </button>

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