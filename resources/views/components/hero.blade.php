<section class="hero relative h-[520px] min-h-[520px] overflow-hidden bg-[#002e55] md:h-[calc(100vh-120px)] md:min-h-[680px]">
    <div id="heroCarousel" class="h-full">
        @foreach ([
            ['image' => 'images/ttc/hero-1.jpg', 'eyebrow' => 'TẬP ĐOÀN TTC', 'title' => 'Vì cộng đồng<br>phát triển địa phương', 'url' => route('about')],
            ['image' => 'images/ttc/hero-2.jpg', 'eyebrow' => 'HỆ SINH THÁI TTC', 'title' => 'Khát vọng tiên phong<br>phát triển bền vững', 'url' => route('business')],
            ['image' => 'images/ttc/hero-3.jpg', 'eyebrow' => 'TTC GROUP', 'title' => 'Kiến tạo giá trị<br>cho tương lai xanh', 'url' => route('social')],
        ] as $index => $slide)
            <article class="hero-slide absolute inset-0 opacity-0 transition-opacity duration-1000 {{ $index === 0 ? 'is-active opacity-100' : '' }}" data-slide="{{ $index }}">
                <img src="{{ asset($slide['image']) }}" alt="{{ strip_tags($slide['title']) }}" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-[#002f55]/80 via-[#002f55]/35 to-transparent"></div>
                <div class="absolute inset-0 mx-auto flex max-w-[1440px] items-center px-6 md:px-12">
                    <div class="max-w-2xl text-white">
                        <p class="mb-4 border-l-4 border-[#ff6500] pl-3 text-xs font-bold tracking-[.24em] text-[#ff6500]">{{ $slide['eyebrow'] }}</p>
                        <h1 class="text-4xl font-bold leading-tight md:text-6xl">{!! $slide['title'] !!}</h1>
                        <a href="{{ $slide['url'] }}" class="mt-8 inline-flex bg-[#ff6500] px-7 py-3 text-sm font-semibold transition hover:bg-[#e85c00]">Khám phá TTC</a>
                    </div>
                </div>
            </article>
        @endforeach
    </div>

    <button type="button" onclick="changeHero(-1)" class="absolute left-5 top-1/2 hidden -translate-y-1/2 border border-white/70 p-3 text-white transition hover:bg-white hover:text-[#00549a] md:block" aria-label="Slide trước">←</button>
    <button type="button" onclick="changeHero(1)" class="absolute right-5 top-1/2 hidden -translate-y-1/2 border border-white/70 p-3 text-white transition hover:bg-white hover:text-[#00549a] md:block" aria-label="Slide tiếp theo">→</button>
    <div class="absolute bottom-8 left-1/2 flex -translate-x-1/2 gap-3">
        @for ($i = 0; $i < 3; $i++)
            <button type="button" class="hero-dot h-2 w-8 bg-white/50 transition {{ $i === 0 ? 'bg-[#ff6500]' : '' }}" onclick="showHero({{ $i }})" aria-label="Hiển thị slide {{ $i + 1 }}"></button>
        @endfor
    </div>
</section>

<script>
    let heroIndex = 0;
    let heroTimer;
    function showHero(index) {
        const slides = document.querySelectorAll('.hero-slide');
        const dots = document.querySelectorAll('.hero-dot');
        heroIndex = (index + slides.length) % slides.length;
        slides.forEach((slide, i) => slide.classList.toggle('opacity-100', i === heroIndex));
        dots.forEach((dot, i) => dot.classList.toggle('bg-[#ff6500]', i === heroIndex));
    }
    function changeHero(step) { showHero(heroIndex + step); resetHeroTimer(); }
    function resetHeroTimer() { clearInterval(heroTimer); heroTimer = setInterval(() => showHero(heroIndex + 1), 6000); }
    document.addEventListener('DOMContentLoaded', resetHeroTimer);
</script>
