@extends('layouts.app')

@section('title', 'Tập đoàn TTC')
@section('description', 'Tập đoàn TTC – Vì cộng đồng, phát triển địa phương.')

@section('content')
    @include('components.hero')

    <section class="bg-white py-16 md:py-24">
        <div class="mx-auto max-w-[1440px] px-5 md:px-10">
            <header class="mb-12 text-center md:mb-16">
                <p class="mb-2 text-sm font-semibold uppercase tracking-[.18em] text-[#ff6500]">TTC Group</p>
                <h2 class="text-3xl font-bold text-[#00549a] md:text-5xl">Lĩnh vực hoạt động</h2>
            </header>
            <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($businessSectors as $sector)
                    <a href="{{ route($sector['route']) }}" class="group relative h-[330px] overflow-hidden">
                        <img src="{{ str_starts_with($sector['image'], 'http') ? $sector['image'] : asset($sector['image']) }}" alt="{{ $sector['title'] }}" class="h-full w-full object-cover transition duration-700 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#003b70]/90 via-[#003b70]/25 to-transparent"></div>
                        <div class="absolute inset-x-0 bottom-0 p-7 text-white">
                            <h3 class="text-2xl font-bold">{{ $sector['title'] }}</h3>
                            <span class="mt-3 inline-flex border-b border-[#ff6500] pb-1 text-sm font-semibold text-[#ff6500]">Xem chi tiết →</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <section class="bg-[#f5f7f8] py-16 md:py-24">
        <div class="mx-auto max-w-[1440px] px-5 md:px-10">
            <div class="mb-12 flex flex-col items-start justify-between gap-4 md:mb-16 md:flex-row md:items-end">
                <div>
                    <p class="mb-2 text-sm font-semibold uppercase tracking-[.18em] text-[#ff6500]">Cập nhật mới nhất</p>
                    <h2 class="text-3xl font-bold text-[#00549a] md:text-5xl">Tin nổi bật</h2>
                </div>
                <a href="{{ route('media') }}" class="border-b-2 border-[#ff6500] pb-1 text-sm font-semibold text-[#00549a]">Xem tất cả tin tức →</a>
            </div>
            <div class="grid grid-cols-1 gap-7 md:grid-cols-3">
                @foreach ($news as $item)
                    @include('components.news-card', ['item' => $item])
                @endforeach
            </div>
        </div>
    </section>

    <section class="overflow-hidden bg-[#eaf8ff] py-12 md:py-[52px]">
        <div class="text-center">
            <h2 class="text-[38px] font-bold leading-none text-[#ff6500] md:text-[48px]">Đơn vị thành viên</h2>
        </div>
        <div class="relative mx-auto mt-10 max-w-[1740px] px-20 md:mt-[42px] md:px-28">
            <button type="button" onclick="moveMemberSlider(-1)" class="absolute left-4 top-1/2 z-10 flex h-[52px] w-[52px] -translate-y-1/2 items-center justify-center rounded-[9px] border border-[#00549a] text-2xl text-[#00549a] transition hover:bg-[#00549a] hover:text-white md:left-7 md:h-[60px] md:w-[60px]" aria-label="Trước">‹</button>
            <div id="memberSlider" class="mx-auto overflow-hidden lg:max-w-[1469px]">
                <div id="memberTrack" class="flex gap-5 transition-transform duration-700 md:gap-[37px]">
                    @foreach ($memberCompanies as $member)
                        <a href="{{ $member['link'] }}" target="_blank" rel="noopener noreferrer" class="member-card flex h-[150px] w-[190px] shrink-0 items-center justify-center rounded-[15px] bg-white p-6 shadow-[0_5px_12px_rgba(0,0,0,.13)] transition hover:-translate-y-1 md:h-[170px] md:w-[214px]">
                            @if (!empty($member['image']))
                                <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }}" class="max-h-[120px] max-w-[150px] object-contain">
                            @else
                                <span class="text-xl font-bold" style="color: {{ $member['color'] }}">{{ $member['logo'] }}</span>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
            <button type="button" onclick="moveMemberSlider(1)" class="absolute right-4 top-1/2 z-10 flex h-[52px] w-[52px] -translate-y-1/2 items-center justify-center rounded-[9px] border border-[#00549a] text-2xl text-[#00549a] transition hover:bg-[#00549a] hover:text-white md:right-7 md:h-[60px] md:w-[60px]" aria-label="Tiếp">›</button>
        </div>
    </section>

    <script>
        let memberCurrentIndex = 0;
        function moveMemberSlider(direction) {
            const track = document.getElementById('memberTrack');
            const card = track?.querySelector('.member-card');
            if (!track || !card) return;
            const visible = window.innerWidth < 640 ? 1 : window.innerWidth < 1024 ? 3 : 6;
            const max = Math.max(0, track.children.length - visible);
            memberCurrentIndex = Math.max(0, Math.min(max, memberCurrentIndex + direction));
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            track.style.transform = `translateX(-${memberCurrentIndex * (card.offsetWidth + gap)}px)`;
        }
    </script>
@endsection
