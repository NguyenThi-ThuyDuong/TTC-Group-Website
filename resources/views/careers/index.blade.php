@extends('layouts.app')

@section('title', 'Tuyển dụng | TTC Group')

@section('content')

<style>
    .recruit-page {
        font-family: 'Montserrat', sans-serif;
    }

    .recruit-section {
        scroll-margin-top: 100px;
    }

    .recruit-image {
        overflow: hidden;
    }

    .recruit-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .6s ease;
    }

    .recruit-image:hover img {
        transform: scale(1.04);
    }

    .policy-tab {
        position: relative;
        transition: all .3s ease;
    }

    .policy-tab.active {
        color: #00549a;
    }

    .policy-tab.active::after {
        content: '';
        position: absolute;
        left: 0;
        right: 0;
        bottom: -1px;
        height: 3px;
        background: #ff6500;
    }

    .policy-content {
        display: none;
    }

    .policy-content.active {
        display: block;
    }

    .benefit-item {
        display: flex;
        gap: 18px;
        align-items: flex-start;
    }

    .benefit-icon {
        width: 72px;
        height: 72px;
        min-width: 72px;
        border-radius: 50%;
        background: #f1f8fc;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #00549a;
    }

    .job-card {
        transition: all .3s ease;
    }

    .job-card:hover {
        transform: translateY(-5px);
        border-color: #ff6500;
        box-shadow: 0 12px 30px rgba(0, 84, 154, .10);
    }

    .job-image {
        overflow: hidden;
    }

    .job-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .5s ease;
    }

    .job-card:hover .job-image img {
        transform: scale(1.05);
    }
</style>

<div class="recruit-page">

  
<!--  Breadcrumb -->


    <div class="bg-white border-b border-gray-100">
        <div class="mx-auto max-w-[1200px] px-6 py-4">

            <div class="flex items-center gap-2 text-sm">

                <a
                    href="{{ route('home') }}"
                    class="text-gray-400 hover:text-[#00549a] transition-colors">

                    Trang chủ

                </a>

                <span class="text-gray-300">
                    /
                </span>

                <span class="font-semibold text-[#00549a]">
                    Tuyển dụng
                </span>

            </div>

        </div>
    </div>

  
<!--  Chính sách tuyển dụng -->
 
    <section class="recruit-section bg-white py-16 md:py-24">

        <div class="mx-auto max-w-[1200px] px-6">

            <div class="grid grid-cols-1 items-center gap-10 lg:grid-cols-2 lg:gap-16">

               
                <div>

                    <p class="mb-3 text-sm font-bold tracking-[.2em] text-[#ff6500]">
                        CƠ HỘI NGHỀ NGHIỆP
                    </p>

                    <h2 class="mb-5 text-3xl font-bold text-[#00549a] md:text-4xl">
                        Chính sách tuyển dụng
                    </h2>

                    <p class="text-base leading-8 text-slate-600">
                        Trên nền tảng coi trọng phát triển con người để tạo ra lợi ích
                        phát triển bền vững, tại TTC, “Tâm - Tầm - Tài” là ba giá trị
                        cốt lõi của chính sách tuyển dụng giúp TTC nuôi dưỡng nhân tài,
                        các chuyên gia giỏi.
                    </p>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        TTC luôn đẩy mạnh công tác đào tạo nhằm nâng chất - nâng tầm
                        cho cán bộ nhân viên, xây dựng niềm tin và sự gắn bó lâu dài
                        giữa nhân viên và công ty.
                    </p>

                    <p class="mt-4 text-base leading-8 text-slate-600">
                        Đồng thời, TTC chú trọng đến văn hóa doanh nghiệp, tạo điều kiện
                        và xây dựng lộ trình, cơ hội để mỗi cá nhân phát triển.
                    </p>

                    <a
                        href="#recruit-section"
                        class="mt-7 inline-flex items-center gap-3
                               bg-[#00549a] px-7 py-3.5
                               text-sm font-semibold text-white
                               transition hover:bg-[#ff6500]">

                        <span>
                            Xem vị trí tuyển
                        </span>

                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5"
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


               
                <div class="recruit-image h-[320px] md:h-[400px] lg:h-[470px]">

                    <img
                        src="{{ asset('images/ttc/recruitment.jpg') }}"
                        alt="Chính sách tuyển dụng"
                        loading="lazy">

                </div>

            </div>

        </div>

    </section>
<!--  Chính sách đào tạo / đãi ngộ -->

    
    <section class="recruit-section bg-[#f5f8fa] py-16 md:py-20">

        <div class="mx-auto max-w-[1200px] px-6">

           
            <div class="mb-12 border-b border-gray-200">

                <div class="flex overflow-x-auto">

                    <button
                        type="button"
                        onclick="switchRecruitTab('training')"
                        id="trainingTab"
                        class="policy-tab active whitespace-nowrap
                               px-6 py-4 text-sm font-bold
                               md:px-10 md:text-base">

                        Chính sách đào tạo

                    </button>

                    <button
                        type="button"
                        onclick="switchRecruitTab('benefits')"
                        id="benefitsTab"
                        class="policy-tab whitespace-nowrap
                               px-6 py-4 text-sm font-bold
                               text-slate-500
                               hover:text-[#00549a]
                               md:px-10 md:text-base">

                        Chính sách đãi ngộ

                    </button>

                </div>

            </div>


            
            <div
                id="trainingContent"
                class="policy-content active">

                <div class="mb-12 text-center">

                    <h2 class="text-3xl font-bold text-[#00549a] md:text-4xl">
                        Chính sách đào tạo
                    </h2>

                    <p class="mx-auto mt-5 max-w-[850px] text-base leading-8 text-slate-600">
                        TTC luôn chú trọng công tác đào tạo nhằm nâng chất – nâng tầm
                        cho CBNV, từ đó xây dựng niềm tin và sự gắn bó lâu dài của nhân viên.
                    </p>

                </div>


                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">

                    {{-- Chương trình phát triển kỹ năng --}}
                    <div>

                        <h3 class="mb-4 text-2xl font-bold text-[#00549a]">
                            Chương trình phát triển kỹ năng
                        </h3>

                        <p class="mb-7 leading-7 text-slate-600">
                            Đào tạo, hỗ trợ nhân viên trong việc phát triển kỹ năng
                            và nâng cao trình độ.
                        </p>


                        <div class="space-y-7">

                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Kỹ năng làm việc
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Công ty tổ chức các khóa học nhằm trau dồi và
                                        nâng cao các kỹ năng, kiến thức cần thiết trong
                                        công việc.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v12m-3-9h6m-8 9h10"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Chương trình liên kết
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Các hình thức đào tạo ngắn hạn, dài hạn,
                                        trong nước, ngoài nước, học tập trung,
                                        tại nơi làm việc và trực tuyến.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 14l9-5-9-5-9 5 9 5z"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12v5c3 2 9 2 14 0v-5"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Chương trình nâng cao trình độ
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Hỗ trợ nhân viên tiếp tục theo học để nâng cao
                                        trình độ ở các cấp bậc đại học và sau đại học.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    {{-- Chương trình hội nhập --}}
                    <div>

                        <h3 class="mb-4 text-2xl font-bold text-[#00549a]">
                            Chương trình đào tạo hội nhập
                        </h3>

                        <p class="mb-7 leading-7 text-slate-600">
                            Giúp nhân viên mới nhanh chóng hòa nhập với TTC thông qua
                            những kiến thức về doanh nghiệp và văn hóa tổ chức.
                        </p>


                        <div class="space-y-7">

                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 8v4l3 2"/>

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="9"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Quá trình hình thành và phát triển
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Giới thiệu lịch sử hình thành và phát triển
                                        của Tập đoàn TTC cùng những thành tựu đã đạt được.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M4 6h16M4 10h16M4 14h10M4 18h7"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Văn hóa công ty
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Giới thiệu về Tập đoàn TTC, các quy định nội bộ,
                                        văn hóa tổ chức và đào tạo công việc.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M17 20h5V4H2v16h5"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 16l3-3 3 3M12 13V7"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Chia sẻ của Ban lãnh đạo
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Chia sẻ về quan điểm quản trị, định hướng
                                        và chiến lược phát triển của công ty.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


           
            <div
                id="benefitsContent"
                class="policy-content">

                <div class="mb-12 text-center">

                    <h2 class="text-3xl font-bold text-[#00549a] md:text-4xl">
                        Chính sách đãi ngộ
                    </h2>

                    <p class="mx-auto mt-5 max-w-[850px] text-base leading-8 text-slate-600">
                        Chính sách đãi ngộ cũng được TTC đặc biệt quan tâm nhằm khích lệ
                        tinh thần cống hiến của CBNV, qua đó tăng hiệu suất lao động
                        và gắn bó lâu dài.
                    </p>

                </div>


                <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">

                   
                    <div>

                        <h3 class="mb-4 text-2xl font-bold text-[#00549a]">
                            Chế độ phúc lợi
                        </h3>

                        <p class="mb-7 leading-7 text-slate-600">
                            Chế độ phúc lợi cho người lao động là chính sách đãi ngộ
                            bên cạnh lương thưởng, nhằm đảm bảo sự thoải mái và thuận
                            tiện cho nhân viên.
                        </p>


                        <div class="space-y-7">

                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M9 12l2 2 4-4"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 3l8 4v5c0 4.5-3.4 7.7-8 9-4.6-1.3-8-4.5-8-9V7l8-4z"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Chăm sóc sức khỏe
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Khám sức khỏe định kỳ, bảo hiểm sức khỏe,
                                        bảo hiểm tai nạn 24/24.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M20 12v7a2 2 0 01-2 2H6a2 2 0 01-2-2v-7"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3 7h18v5H3zM12 7v14"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M7.5 7a2.5 2.5 0 100-5C6 2 5 3 5 4.5 5 6 6 7 7.5 7zM16.5 7a2.5 2.5 0 100-5C15 2 14 3 14 4.5 14 6 15 7 16.5 7z"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Quà tặng
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Quà sinh nhật, quà kết hôn, quà sinh con
                                        và quà nhân các dịp Lễ - Tết - Hiếu hỉ.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 6v12M6 12h12"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Các chế độ khác
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Cơm trưa, cước điện thoại, nghỉ mát định kỳ,
                                        thu nhập tháng 13, thưởng hiệu quả công việc,
                                        thưởng thâm niên và ESOP.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    
                    <div>

                        <h3 class="mb-4 text-2xl font-bold text-[#00549a]">
                            Chế độ lương
                        </h3>

                        <p class="mb-7 leading-7 text-slate-600">
                            TTC luôn tuyển dụng và bổ nhiệm đúng trình độ, đúng vị trí,
                            trả công xứng đáng với năng lực làm việc và thành tích đóng góp.
                        </p>


                        <div class="space-y-7">

                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 1v22M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H7"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Mức lương cạnh tranh
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Xây dựng chế độ lương, thưởng cạnh tranh,
                                        đảm bảo giữ được người tài và thu hút nhân sự.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 14l9-5-9-5-9 5 9 5z"/>

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M5 12v5c3 2 9 2 14 0v-5"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Lương theo năng lực
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Thu nhập tương xứng với năng lực làm việc,
                                        sự nỗ lực và thành tích đóng góp.
                                    </p>

                                </div>

                            </div>


                            <div class="benefit-item">

                                <div class="benefit-icon">

                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-8 w-8"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="1.6">

                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M12 8v4l3 2"/>

                                        <circle
                                            cx="12"
                                            cy="12"
                                            r="9"/>

                                    </svg>

                                </div>

                                <div>

                                    <h4 class="font-bold text-[#00549a]">
                                        Lương thâm niên
                                    </h4>

                                    <p class="mt-2 text-sm leading-7 text-slate-600">
                                        Chế độ thưởng định kỳ cho những cán bộ nhân viên
                                        gắn bó trên 5 năm, 10 năm, 15 năm.
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


   
    <section
        id="recruit-section"
        class="recruit-section bg-white py-16 md:py-24">

        <div class="mx-auto max-w-[1200px] px-6">

            <div class="mb-10 text-center">

                <h2 class="text-3xl font-bold text-[#00549a] md:text-4xl">
                    Vị trí tuyển dụng
                </h2>

            </div>


            
            <div
                class="mb-10 flex flex-col gap-4
                       rounded-lg bg-[#f5f8fa]
                       p-5 md:flex-row md:items-center">

                <label
                    for="department"
                    class="font-bold text-slate-800">

                    Lĩnh vực

                </label>

                <select
                    id="department"
                    class="w-full border border-gray-200
                           bg-white px-4 py-3
                           text-sm outline-none
                           focus:border-[#00549a]
                           md:w-[300px]">

                    <option value="all">
                        Tất cả
                    </option>

                    <option value="agriculture">
                        Nông nghiệp
                    </option>

                    <option value="energy">
                        Năng lượng
                    </option>

                    <option value="real-estate">
                        Bất động sản
                    </option>

                    <option value="industrial">
                        Bất động sản Công nghiệp
                    </option>

                    <option value="hospitality">
                        Du lịch
                    </option>

                    <option value="education">
                        Giáo dục
                    </option>

                    <option value="ttci">
                        TTCI
                    </option>

                </select>

            </div>


           
            <div
                id="jobGrid"
                class="grid grid-cols-1 gap-8 md:grid-cols-2">


                @php

                    $jobs = [

                        [
                            'title' => 'Chuyên viên Hành chính',
                            'location' => 'TP Hồ Chí Minh',
                            'category' => 'ttci',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                        [
                            'title' => 'Chuyên viên/ CV Cấp trung Pháp chế',
                            'location' => 'TP Hồ Chí Minh',
                            'category' => 'real-estate',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                        [
                            'title' => 'Chuyên viên Nông nghiệp',
                            'location' => 'Tây Ninh',
                            'category' => 'agriculture',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                        [
                            'title' => 'Nhân viên Kinh doanh',
                            'location' => 'Tây Ninh',
                            'category' => 'real-estate',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                        [
                            'title' => 'Nhân viên Quản lý tài sản',
                            'location' => 'Tây Ninh',
                            'category' => 'real-estate',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                        [
                            'title' => 'Nhân viên Kinh doanh (Mật)',
                            'location' => 'Hà Nội',
                            'category' => 'ttci',
                            'image' => 'images/ttc/recruitment.jpg',
                        ],

                    ];

                @endphp


                @foreach($jobs as $job)

                    <article
                        class="job-card overflow-hidden
                               border border-slate-200
                               bg-white"
                        data-category="{{ $job['category'] }}">


                        <div
                            class="grid grid-cols-1
                                   sm:grid-cols-[240px_1fr]">


                            {{-- Image --}}
                            <div
                                class="job-image h-[220px] sm:h-full">

                                <img
                                    src="{{ asset($job['image']) }}"
                                    alt="{{ $job['title'] }}"
                                    loading="lazy">

                            </div>


                            {{-- Content --}}
                            <div class="p-6 md:p-7">

                                <span
                                    class="text-xs
                                           font-bold
                                           uppercase
                                           tracking-wider
                                           text-[#ff6500]">

                                    TTC GROUP

                                </span>


                                <h3
                                    class="mt-3
                                           text-xl
                                           font-bold
                                           uppercase
                                           leading-snug
                                           text-[#00549a]">

                                    {{ $job['title'] }}

                                </h3>


                                <div class="mt-5 space-y-3">

                                    <div
                                        class="flex items-center gap-3
                                               text-sm text-slate-600">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-[#00549a]"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1.7">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z"/>

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M19.5 11c0 5-7.5 10-7.5 10S4.5 16 4.5 11a7.5 7.5 0 1115 0z"/>

                                        </svg>

                                        <span>
                                            Địa điểm: {{ $job['location'] }}
                                        </span>

                                    </div>


                                    <div
                                        class="flex items-center gap-3
                                               text-sm text-slate-600">

                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-[#00549a]"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke="currentColor"
                                            stroke-width="1.7">

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 8c-1.657 0-3 1.343-3 3s1.343 3 3 3 3-1.343 3-3-1.343-3-3-3z"/>

                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>

                                        </svg>

                                        <span>
                                            Lương: Thỏa thuận
                                        </span>

                                    </div>

                                </div>


                                <a
                                    href="mailto:info@ttcgroup.vn?subject=Ứng tuyển {{ $job['title'] }}"
                                    class="mt-6 inline-flex
                                           items-center gap-2
                                           text-sm font-bold
                                           text-[#00549a]
                                           hover:text-[#ff6500]
                                           transition-colors">

                                    Ứng tuyển

                                    <span>
                                        →
                                    </span>

                                </a>

                            </div>

                        </div>

                    </article>

                @endforeach

            </div>

        </div>

    </section>

</div>


<script>

function switchRecruitTab(tab) {

    const trainingContent =
        document.getElementById('trainingContent');

    const benefitsContent =
        document.getElementById('benefitsContent');

    const trainingTab =
        document.getElementById('trainingTab');

    const benefitsTab =
        document.getElementById('benefitsTab');


    trainingContent.classList.remove('active');

    benefitsContent.classList.remove('active');

    trainingTab.classList.remove('active');

    benefitsTab.classList.remove('active');


    if (tab === 'training') {

        trainingContent.classList.add('active');

        trainingTab.classList.add('active');

    }


    if (tab === 'benefits') {

        benefitsContent.classList.add('active');

        benefitsTab.classList.add('active');

    }

}


document.addEventListener('DOMContentLoaded', function () {

    const department =
        document.getElementById('department');

    const jobs =
        document.querySelectorAll('.job-card');


    if (department) {

        department.addEventListener('change', function () {

            const value = this.value;


            jobs.forEach(function (job) {

                if (
                    value === 'all' ||
                    job.dataset.category === value
                ) {

                    job.style.display = '';

                } else {

                    job.style.display = 'none';

                }

            });

        });

    }

});

</script>

@endsection