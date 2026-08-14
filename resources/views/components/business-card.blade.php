<div class="relative overflow-hidden rounded-xl group shadow-lg aspect-[4/3] bg-gray-900 cursor-pointer">
    <!-- Background image -->
    <img src="{{ str_starts_with($sector['image'], 'http') ? $sector['image'] : asset($sector['image']) }}" alt="{{ $sector['title'] }}" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out opacity-80 group-hover:opacity-60">
    
    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-transparent group-hover:from-emerald-950/80 group-hover:to-black/30 transition-all duration-300"></div>

    <!-- Content -->
    <div class="absolute inset-0 flex flex-col justify-end p-6 text-white z-10 space-y-2">
        <h3 class="text-xl font-bold tracking-wide group-hover:text-[#EAA522] transition-colors duration-300" data-lang-vi="{{ $sector['title'] }}" data-lang-en="{{ $sector['title_en'] }}">
            {{ $sector['title'] }}
        </h3>
        
        <p class="text-xs text-gray-300 line-clamp-2 transform translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 leading-relaxed" data-lang-vi="{{ $sector['desc'] }}" data-lang-en="{{ $sector['desc_en'] }}">
            {{ $sector['desc'] }}
        </p>
        
        <div class="flex items-center space-x-1.5 text-xs font-semibold text-[#EAA522] pt-2 transform translate-y-3 group-hover:translate-y-0 opacity-0 group-hover:opacity-100 transition-all duration-300 delay-75">
            <a href="{{ route($sector['route']) }}" class="flex items-center space-x-1 hover:underline">
                <span data-lang-vi="Xem chi tiết" data-lang-en="Read More">Xem chi tiết</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
                </svg>
            </a>
        </div>
    </div>
</div>
