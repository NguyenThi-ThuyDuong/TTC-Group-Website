@extends('layouts.app')

@section('title', 'Trách nhiệm xã hội | TTC Group')

@section('content')

    {{-- Breadcrumb --}}
    <div class="bg-white">
        <div class="mx-auto max-w-[1200px] px-6 py-4">
            <nav class="text-sm text-slate-500">
                <a href="{{ url('/') }}"
                   class="transition hover:text-[#00549a]">
                    Trang chủ
                </a>

                <span class="mx-2">/</span>

                <span class="font-medium text-[#00549a]">
                    Trách nhiệm xã hội
                </span>
            </nav>
        </div>
    </div>


    {{-- Main Content --}}
    <section class="py-16 md:py-20">
        <div class="mx-auto max-w-[1200px] px-6">

            {{-- Title + Description --}}
            <div class="text-center">

                <h1 class="text-3xl font-bold text-[#00549a] md:text-4xl">
                    Trách nhiệm xã hội
                </h1>

                <p class="mx-auto mt-6 max-w-5xl text-base leading-8 text-slate-600">
                    TTC luôn ý thức rằng: Thực hiện trách nhiệm xã hội,
                    vừa là đóng góp của doanh nghiệp cho xã hội, vừa là
                    một lợi ích tự thân, củng cố khả năng cạnh tranh của
                    doanh nghiệp trong bối cảnh hội nhập sâu vào nền kinh tế thế giới,
                    nơi mà các chuẩn mực đạo đức trong kinh doanh đã trở thành
                    một hàm lượng bắt buộc trong từng sản phẩm - dịch vụ.
                </p>

            </div>


            {{-- Tabs --}}
            <div class="mt-12">

                {{-- Tab Navigation --}}
                <div class="border-b border-slate-200">

                    <div class="grid grid-cols-2 md:grid-cols-4">

                        <button
                            type="button"
                            onclick="showTab('employee')"
                            id="tab-employee"
                            class="tab-button border-b-2 border-[#00549a] px-4 py-4 text-sm font-semibold text-[#00549a] md:text-base"
                        >
                            Đối với Cán bộ nhân viên
                        </button>

                        <button
                            type="button"
                            onclick="showTab('investor')"
                            id="tab-investor"
                            class="tab-button border-b-2 border-transparent px-4 py-4 text-sm font-semibold text-slate-500 hover:text-[#00549a] md:text-base"
                        >
                            Đối với Nhà đầu tư
                        </button>

                        <button
                            type="button"
                            onclick="showTab('partner')"
                            id="tab-partner"
                            class="tab-button border-b-2 border-transparent px-4 py-4 text-sm font-semibold text-slate-500 hover:text-[#00549a] md:text-base"
                        >
                            Đối với Đối tác
                        </button>

                        <button
                            type="button"
                            onclick="showTab('community')"
                            id="tab-community"
                            class="tab-button border-b-2 border-transparent px-4 py-4 text-sm font-semibold text-slate-500 hover:text-[#00549a] md:text-base"
                        >
                            Đối với Cộng đồng
                        </button>

                    </div>

                </div>


                {{-- TAB 1: Cán bộ nhân viên --}}
                <div id="employee" class="tab-content py-12">

                    <div class="grid items-center gap-10 lg:grid-cols-2">

                        <div>

                            <blockquote class="border-l-4 border-[#ff6500] pl-6 text-lg italic leading-8 text-slate-600">
                                Đồng hành cùng với đại gia đình TTC,
                                không thể nào thiếu được đội ngũ cán bộ nhân viên
                                từ khắp mọi miền trong và ngoài nước,
                                mang trong mình đủ Đức và Tài, ngày đêm miệt mài
                                với công việc tại vị trí của mình.
                            </blockquote>

                            <p class="mt-6 leading-8 text-slate-600">
                                Con người là tài sản quý giá của tổ chức nhưng
                                không phải là sở hữu của tổ chức. Vì vậy TTC luôn
                                chú trọng xây dựng chính sách và chế độ phù hợp
                                để đội ngũ nhân sự có thể đồng hành lâu dài
                                cùng doanh nghiệp.
                            </p>

                        </div>

                        <div>
                            <img
                                src="{{ asset('images/ttc/employees.jpg') }}"
                                alt="Cán bộ nhân viên TTC"
                                class="h-[350px] w-full object-cover shadow-lg"
                            >
                        </div>

                    </div>

                </div>


                {{-- TAB 2: Nhà đầu tư --}}
                <div id="investor" class="tab-content hidden py-12">

                    <div class="grid items-center gap-10 lg:grid-cols-2">

                        <div>

                            <h2 class="text-2xl font-bold text-[#00549a]">
                                Đối với Nhà đầu tư
                            </h2>

                            <p class="mt-6 leading-8 text-slate-600">
                                TTC cam kết xây dựng môi trường kinh doanh
                                minh bạch, hiệu quả và bền vững, qua đó tạo
                                giá trị lâu dài cho các cổ đông và nhà đầu tư.
                            </p>

                        </div>

                        <div>
                            <img
                                src="{{ asset('images/ttc/investor.jpg') }}"
                                alt="Nhà đầu tư TTC"
                                class="h-[350px] w-full object-cover shadow-lg"
                            >
                        </div>

                    </div>

                </div>


                {{-- TAB 3: Đối tác --}}
                <div id="partner" class="tab-content hidden py-12">

                    <div class="grid items-center gap-10 lg:grid-cols-2">

                        <div>

                            <h2 class="text-2xl font-bold text-[#00549a]">
                                Đối với Đối tác
                            </h2>

                            <p class="mt-6 leading-8 text-slate-600">
                                TTC xây dựng quan hệ hợp tác trên cơ sở
                                minh bạch, tôn trọng và cùng phát triển,
                                hướng tới những giá trị bền vững cho
                                doanh nghiệp và đối tác.
                            </p>

                        </div>

                        <div>
                            <img
                                src="{{ asset('images/ttc/partner.jpg') }}"
                                alt="Đối tác TTC"
                                class="h-[350px] w-full object-cover shadow-lg"
                            >
                        </div>

                    </div>

                </div>


                {{-- TAB 4: Cộng đồng --}}
                <div id="community" class="tab-content hidden py-12">

                    <div class="grid items-center gap-10 lg:grid-cols-2">

                        <div>

                            <h2 class="text-2xl font-bold text-[#00549a]">
                                Đối với Cộng đồng
                            </h2>

                            <p class="mt-6 leading-8 text-slate-600">
                                TTC tích cực đồng hành cùng cộng đồng thông qua
                                các hoạt động giáo dục, y tế, môi trường và
                                an sinh xã hội, góp phần phát triển địa phương
                                và tạo ra những giá trị tích cực cho xã hội.
                            </p>

                        </div>

                        <div>
                            <img
                                src="{{ asset('images/ttc/community.jpg') }}"
                                alt="Hoạt động cộng đồng TTC"
                                class="h-[350px] w-full object-cover shadow-lg"
                            >
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- Tab Script --}}
    <script>
        function showTab(tabId) {

            // Ẩn tất cả nội dung
            document.querySelectorAll('.tab-content').forEach(function(tab) {
                tab.classList.add('hidden');
            });

            // Reset tất cả button
            document.querySelectorAll('.tab-button').forEach(function(button) {
                button.classList.remove(
                    'border-[#00549a]',
                    'text-[#00549a]'
                );

                button.classList.add(
                    'border-transparent',
                    'text-slate-500'
                );
            });

            // Hiện tab được chọn
            document.getElementById(tabId).classList.remove('hidden');

            // Active button
            document.getElementById('tab-' + tabId).classList.remove(
                'border-transparent',
                'text-slate-500'
            );

            document.getElementById('tab-' + tabId).classList.add(
                'border-[#00549a]',
                'text-[#00549a]'
            );
        }
    </script>

@endsection