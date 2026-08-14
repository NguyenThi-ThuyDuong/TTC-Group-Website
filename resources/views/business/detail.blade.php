@extends('layouts.app')

@section('title', $pageTitle . ' | TTC Group')

@section('description', $pageDesc)

@section('content')
<!--  BREADCRUMB-->

<section class="border-b border-gray-100 bg-white">
    <div class="mx-auto max-w-[1200px] px-6">
        <nav class="flex items-center gap-2 py-5 text-sm text-gray-500">

            <a href="{{ route('home') }}"
               class="transition hover:text-[#00549a]">
                Trang chủ
            </a>

            <span>/</span>

            <a href="{{ route('business') }}"
               class="transition hover:text-[#00549a]">
                Lĩnh vực hoạt động
            </a>

            <span>/</span>

            <span class="font-medium text-[#00549a]">
                {{ $pageTitle }}
            </span>

        </nav>
    </div>
</section>
<!--   TỔNG QUAN-->


<section class="bg-white py-16 md:py-20">

    <div class="mx-auto max-w-[1200px] px-6">

        <h2 class="mb-8 text-3xl font-bold text-[#00549a]">
            Tổng quan
        </h2>

        <div class="grid gap-12 lg:grid-cols-2">

         
            <div>

                @foreach($paragraphs as $paragraph)

                    <p class="mb-6 text-justify text-[15px] leading-8 text-gray-600">
                        {{ $paragraph }}
                    </p>

                @endforeach

            </div>


          
            <div>

                <div class="grid grid-cols-2">

                    @foreach($highlights as $index => $highlight)

                        <div class="
                                flex min-h-[150px]
                                flex-col
                                items-center
                                justify-center
                                border-gray-200
                                px-5
                                py-8
                                text-center

                                {{ $index % 2 !== 0 ? 'border-l' : '' }}
                                {{ $index >= 2 ? 'border-t' : '' }}

                                md:min-h-[165px] " >

                            <div class="text-3xl font-semibold text-[#00549a] md:text-4xl">
                                {{ $highlight['value'] }}
                            </div>

                            <div class="mt-3 max-w-[180px] text-sm leading-6 text-gray-500">
                                {{ $highlight['label'] }}
                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    </div>

</section>

<!--   GALLERY -->

@if(!empty($gallery))

<section class="bg-white pb-16 md:pb-20">

    <div class="mx-auto max-w-[1200px] px-6">

        <div class="grid grid-cols-2 gap-5 md:grid-cols-3">

            @foreach($gallery as $image)

                <div class="group overflow-hidden rounded-[20px]">

                    <img
                        src="{{ str_starts_with($image, 'http') ? $image : asset($image) }}"
                        alt="{{ $pageTitle }}"
                        class="
                            h-[220px]
                            w-full
                            object-cover
                            transition
                            duration-700
                            group-hover:scale-105

                            md:h-[260px]
                        "
                    >

                </div>

            @endforeach

        </div>

    </div>

</section>

@endif

<!--   THẾ MẠNH -->

@if(!empty($strengthTitle))

<section class="bg-[#f5f5f5] py-16 md:py-20">

    <div class="mx-auto max-w-[1200px] px-6">

        <h2 class="mb-8 text-center text-3xl font-bold text-[#00549a]">
            {{ $strengthTitle }}
        </h2>

        <div class="mx-auto max-w-5xl">

            <p class="text-justify text-[15px] leading-8 text-gray-600">
                {{ $strengthText }}
            </p>

        </div>

    </div>

</section>

@endif

<!--   ĐỊNH HƯỚNG PHÁT TRIỂN -->

@if(!empty($directionTitle))

<section class="bg-white py-16 md:py-20">

    <div class="mx-auto max-w-[1200px] px-6">

        <h2 class="mb-8 text-center text-3xl font-bold text-[#00549a]">
            {{ $directionTitle }}
        </h2>

        <div
            class="
                grid
                items-center
                gap-10
                md:grid-cols-2
            "
        >

           
            <div>

                <p class="text-justify text-[15px] leading-8 text-gray-600">
                    {{ $directionText }}
                </p>

            </div>


           
            @if(!empty($directionImage))

                <div class="group overflow-hidden rounded-[20px]">

                    <img
                        src="{{ str_starts_with($directionImage, 'http') ? $directionImage : asset($directionImage) }}"
                        alt="{{ $directionTitle }}"
                        class="
                            h-[280px]
                            w-full
                            object-cover
                            transition
                            duration-700
                            group-hover:scale-105

                            md:h-[380px]
                        "
                    >

                </div>

            @endif

        </div>

    </div>

</section>

@endif

<!--     TIN TỨC KHÁC -->

@if(!empty($news))

<section class="bg-white py-16 md:py-20">

    <div class="mx-auto max-w-[1200px] px-6">

        <h2 class="mb-10 text-center text-3xl font-bold text-[#00549a]">
            Tin tức khác
        </h2>


        <div class="grid gap-8 md:grid-cols-3">

            @foreach($news as $item)

                <article class="group">

                    
                    @if(!empty($item['image']))

                        <div class="overflow-hidden rounded-[20px]">

                            <img
                                src="{{ str_starts_with($item['image'], 'http') ? $item['image'] : asset($item['image']) }}"
                                alt="{{ $item['title'] }}"
                                class="
                                    h-[220px]
                                    w-full
                                    object-cover
                                    transition
                                    duration-700
                                    group-hover:scale-105
                                "
                            >

                        </div>

                    @endif


                    
                    <div class="pt-5">

                        @if(!empty($item['date']))

                            <p class="mb-2 text-xs font-semibold text-gray-400">
                                {{ $item['date'] }}
                            </p>

                        @endif


                        <h3
                            class="
                                text-lg
                                font-semibold
                                leading-7
                                text-[#00549a]
                                transition
                                group-hover:text-[#ff6500]
                            "
                        >
                            {{ $item['title'] }}
                        </h3>


                        @if(!empty($item['summary']))

                            <p class="mt-3 text-sm leading-6 text-gray-500">
                                {{ $item['summary'] }}
                            </p>

                        @endif


                        @if(!empty($item['url']))

                            <a
                                href="{{ $item['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="
                                    mt-5
                                    inline-flex
                                    items-center
                                    gap-2
                                    text-sm
                                    font-semibold
                                    text-[#00549a]
                                    transition
                                    hover:text-[#ff6500]
                                "
                            >
                                <span>Xem thêm</span>

                                <span class="text-lg">
                                    →
                                </span>

                            </a>

                        @endif

                    </div>

                </article>

            @endforeach

        </div>

    </div>

</section>

@endif
<!-- CỘNG ĐỒNG / PHÁT TRIỂN BỀN VỮNG-->


@if(!empty($communityImage))

<section class="relative overflow-hidden">

    <img
        src="{{ str_starts_with($communityImage, 'http') ? $communityImage : asset($communityImage) }}"
        alt="Phát triển bền vững"
        class="
            h-[320px]
            w-full
            object-cover

            md:h-[430px]
        "
    >

    <div class="absolute inset-0 bg-black/35"></div>

    <div class="absolute inset-0 flex items-center">

        <div class="mx-auto w-full max-w-[1200px] px-6">

            <p class="text-lg italic text-white">
                Vì cộng đồng
            </p>

            <h2
                class="
                    mt-2
                    text-3xl
                    font-bold
                    tracking-wide
                    text-white

                    md:text-5xl
                "
            >
                PHÁT TRIỂN BỀN VỮNG
            </h2>

        </div>

    </div>

</section>

@endif

@endsection