@extends('layouts.app')

@section('title', 'Đơn vị thành viên | TTC Group')

@section('content')
<!-- Page Hero -->

@include('components.page-hero', [
    'title' => 'Đơn vị thành viên',
    'image' => 'images/ttc/hero-2.jpg'
])
<!-- Giới thiệu-->

<section class="member-list py-16 lg:py-24">
    <div class="mx-auto max-w-[1200px] px-6">

        <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">

          
            <div class="text-center lg:text-left">
                <h2 class="mb-4 text-3xl font-bold text-slate-800">
                    Đơn vị thành viên
                </h2>

                <div class="space-y-4 text-justify leading-8 text-slate-600">
                    <p>
                        Các đơn vị thành viên của TTC hoạt động trong các lĩnh vực:
                        Nông nghiệp, Năng lượng, Bất động sản, Bất động sản Công nghiệp,
                        Du lịch và Giáo dục trải dài khắp các tỉnh thành trong cả nước
                        và các quốc gia như Lào, Campuchia, Singapore, Úc,...
                    </p>

                    <p>
                        Cùng nỗ lực tăng tính minh bạch và tuân thủ, gia tăng giá trị
                        vốn hóa thị trường, các Công ty của Tập đoàn đã được niêm yết
                        chính thức trên Sở Giao dịch Chứng khoán TP.HCM.
                    </p>
                </div>
            </div>

           
            <div class="grid grid-cols-2 gap-5">

                <div class="flex min-h-[180px] flex-col justify-center rounded bg-green-50 p-8">
                    <div class="text-5xl font-bold text-green-800">
                        06
                    </div>

                    <div class="mt-3 text-xl text-slate-700">
                        Ngành
                    </div>
                </div>

                <div class="flex min-h-[180px] flex-col justify-center rounded bg-green-50 p-8">
                    <div class="text-5xl font-bold text-green-800">
                        120+
                    </div>

                    <div class="mt-3 text-xl text-slate-700">
                        Đơn vị trực thuộc
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>



<section class="member-list-2 pb-20">
    <div class="mx-auto max-w-[1200px] px-6">

        @foreach($memberCompanies as $sector)

            <div
                class="mb-16 grid grid-cols-1 gap-8 lg:grid-cols-2 lg:items-center"
                style="--color-code: {{ $sector['color'] ?? '#397140' }}"
            >

                
                <div class="overflow-hidden rounded">

                    @if(!empty($sector['sector_image']))

                        <a
                            href="{{ asset($sector['sector_image']) }}"
                            target="_blank"
                            rel="noopener"
                        >
                            <img
                                src="{{ asset($sector['sector_image']) }}"
                                alt="{{ $sector['name'] }}"
                                class="h-full w-full object-cover transition duration-500 hover:scale-105"
                            >
                        </a>

                    @endif

                </div>


               
                <div>

                    <h2
                        class="mb-7 text-3xl font-bold lg:text-4xl"
                        style="color: {{ $sector['color'] ?? '#397140' }}"
                    >
                        {{ $sector['name'] }}
                    </h2>


                   
                    <div class="grid grid-cols-2 gap-4 sm:grid-cols-3">

                        @foreach($sector['companies'] ?? [] as $company)

                            <a
                                href="{{ $company['link'] }}"
                                target="_blank"
                                rel="noopener"
                                class="group flex h-32 items-center justify-center rounded bg-white p-5 shadow-md transition duration-300 hover:-translate-y-1 hover:shadow-xl"
                            >

                                @if(!empty($company['image']))

                                    <img
                                        src="{{ asset($company['image']) }}"
                                        alt="{{ $company['name'] }}"
                                        class="max-h-24 max-w-full object-contain transition duration-300 group-hover:scale-105"
                                        loading="lazy"
                                    >

                                @else

                                    <strong
                                        class="text-center text-lg"
                                        style="color: {{ $company['color'] ?? '#397140' }}"
                                    >
                                        {{ $company['name'] }}
                                    </strong>

                                @endif

                            </a>

                        @endforeach

                    </div>

                </div>

            </div>

        @endforeach

    </div>
</section>


@endsection
